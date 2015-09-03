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
      // $doc = new  \DOMDocument();
      // $doc->Load('holidays.xml');
      // $xml=simplexml_load_file("holidays.xml");
     //  $xpath = new \DOMXPath($doc);
     //  $query='//month[@name='.$month.']';
     //  $queryResult = $xpath->query($query);
       $xml = simplexml_load_file("holidays.xml");
       $query='//month[@name='.$month.']';
       $result = $xml->xpath($query);
       foreach($result as $row) {
       // var_dump($queryResult->day);
            if($day == $row->day ) {
                $sts=0;
            }
        }
     
        return $sts;
    }

    public function setAbsence($datee, $absid)
    {

             if($this->isPublicHoliday($datee)) {
                $userid=$_SESSION['userid'];
                $Aid=$this->getAbsId($absid);
                $sql="INSERT INTO user_absence (datee, abs_id, user_id) VALUES (:datee, :Aid, :userid )" ;
                $params= array(':datee' => $datee ,':Aid'=>$Aid ,':userid' =>$userid);
                $inf=parent::Insert($sql,$params);
                echo $inf;
              }
            else {
              echo "public holiday";
            }
   }

   private function getAbsId ($absname)
   {
      $query='SELECT id from absence where kind LIKE :absname';
      $params= array(':absname' => $absname);
      $inf=parent::Select($query,$params);
      foreach($inf as $row) {
        $row=$inf;
      }
      $Aid=$row['id'];
      return $Aid;
   }



 public function getAbsence($absence) {
       $absid = $this->getAbsId($absence);
       $userid = $_SESSION['userid'];
       var_dump($absid);
       $query ='SELECT * from user_absence where user_id LIKE :userid AND abs_id LIKE :absid ORDER BY datee limit 3';
       $params = array(':absid' => $absid, 'userid' => $userid);
       $inf = parent::Select($query,$params);
       //echo "this id :".$inf;
       return $inf;
}
}


