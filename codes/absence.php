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
    public function isPublicHoliday($date)
    {  
       $sts=1;
       $date=explode('/',$date);
       $day=(int)$date[1];
       $month=(int)$date[0];
       $xml = simplexml_load_file("holidays.xml");
       $query='//month[@name='.$month.']';
       $result = $xml->xpath($query);
       foreach($result as $row) {
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
                $date=explode('/',$datee);
                $month=(int)$date[0];
                $day=(int)$date[1];
                $year=(int)$date[2];
                $query='SELECT user_id from user_absence where user_id like :userid and month like :month and day like :day and year like :year';
                $params= array(':userid' =>$userid , ':month' => $month , ':year' => $year, ':day' => $day);
                $sts=parent::Select($query, $params);
                if(!$sts) {
                   $Aid=$this->getAbsId($absid);
                   $sql="INSERT INTO user_absence (datee,month,year,abs_id, user_id, day) VALUES (:datee, :month, :year, :Aid, :userid, :day)";
                   $params= array(':datee' => $datee ,':Aid'=>$Aid ,':userid' =>$userid , ':month' => $month , ':year' => $year, ':day' => $day);
                   $inf=parent::Insert($sql,$params);
                   echo $inf;
                }
                else {
                  echo "inserted before";
                }

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
      
         $Aid=(int)$row['id'];
      }
     
      return $Aid;
   }



 public function getAbsence($absence, $month, $year) {
       $absid = $this->getAbsId($absence);
       $userid = $_SESSION['userid'];
       $query ='SELECT datee from user_absence where user_id LIKE :userid AND abs_id LIKE :absid  AND month LIKE :month AND year LIKE :year';
       $params = array(':absid' => $absid, ':userid' => $userid, ':year' => $year, ':month' => $month);
       $inf = parent::Select($query, $params);
       return $inf;
}
}


