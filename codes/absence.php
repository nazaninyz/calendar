<?php
namespace db;
require 'db.php';
//session_start();
class Calendar extends DataBase
{
    public $absence= array();
    public $date= array();
    public $counter;
    public $publicHolidays;
    public function countAbsence()
    {
            $query="SELECT absdate,abs_id FROM user_absence where user_id like :user order by absdate";
            $params= array(':user'=> $_SESSION['name']);
            $inf=parent::Select($query,$params);
            $i=0;
            while ($result = $inf->fetch()) {
                $this->absence[$i]=$result['abs_id'];
                $this->date[$i]=$result['absdate'];
            }
            echo $inf;
   
    } 
    public function isPublicHoliday($month,$day)
    {  
       $sts=1;
       $doc = new  \DOMDocument();
       $doc->Load('holidays.xml');
       $xpath = new \DOMXPath($doc);
       $query='//month[@name='.$month.']';
       $queryResult = $xpath->query($query);
       foreach($queryResult as $day) {
            if($day == $queryResult->day ) {
                $sts=0;
            }
        }
        return $sts;
    }
    public function setAbsence($month, $day, $year, $absid, $userid)
    {

             if($this->isPublicHoliday($month,$day)) {
                $sql="INSERT INTO user_absence (day, month, year, abs_id, user_id) VALUES (:day, :month, :year, :absid, :userid )" ;
                $params= array(':day' => $day, ':month'=>$month  ,':year'=>$year ,':absid'=>$absid ,':userid' =>$userid);
                $inf=parent::Insert($sql,$params);
                echo $inf;
              }
   }
}
