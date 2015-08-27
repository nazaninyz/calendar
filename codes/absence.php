<?php
namespace db;
require 'db.php'
session_start();
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
       $doc->Load('holidays.xml');
       $xpath = new DOMXPath($doc);
       $query='//month[@name='.$month.']';
       $queryResult = $xpathvar->query($query);
       foreach($queryResult as $result) {
            if($day==) {
                $sts=0;
            }
        }
        return $sts;
    }
    public function setAbsence($day, $month, $absid)
    {

             if($this->isPublicHoliday($month,$day)) {
                $sql="INSERT INTO user_absence (day, month, abs_id, user_is) VALUES :day, :month, :absid, :userid";
                $params= array (':day' => $day, ':month'=$month => , ':absid'=>$absid ,':userid' =>$_SESSION['name']);
                $inf=parent::Insert($query,$params);
                echo $inf;
              }
   }
}
