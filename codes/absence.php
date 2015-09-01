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
    public function isPublicHoliday($date)
    {  
       $sts=1;
       $date=explode('/',$date);
       $day=(int)$date[1];
       $month=(int)$date[0];
       $doc = new  \DOMDocument();
       $doc->Load('holidays.xml');
       $xpath = new DOMXPath($doc);
       $query='//month[@name='.$month.']';
       $queryResult = $xpath->query($query);
       foreach($queryResult as $result) {
        var_dump($queryResult->day);
            if($day == $queryResult->day ) {
                $sts=0;
            }
        }
        return $sts;
    }
    public function setAbsence($datee, $absid)
    {

             if($this->isPublicHoliday($datee)) {
                $userid=$_SESSION['id'];
                $sql="INSERT INTO user_absence (datee, abs_id, user_id) VALUES (:datee, :absid, :userid )" ;
                $params= array(':datee' => $datee ,':absid'=>$absid ,':userid' =>$userid);
                $inf=parent::Insert($sql,$params);
                echo $inf;
              }
            else {
              echo "public holiday";
            }
   }
   public function getAbsId ($absname)
   {
      $query='SELECT id from absence where kind LIKE :absname';
      $params= array(':absname' => $absname);
      $inf=parent::Select($query,$params);
      var_dump($inf);
      $Aid=(int)$inf[0];
      return $Aid;
   }
}
