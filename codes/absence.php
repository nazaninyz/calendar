<?php
namespace db;
require 'db.php'
class Calendar extends DataBase
{
    public $absence= array();
    public $date= array();
    public $counter;
    public $publicHolidays;
    public function countAbsence($user)
    {
            $query="SELECT absdate,abs_id FROM user_absence where user_id like :user order by absdate";
            
            $inf=parent::Select($query);
            $i=0;
            $inf->setFetchMode(PDO::FETCH_ASSOC);
            while ($result = $inf->fetch()) {
                $this->counter++;
                $this->absence[$i]=$result['abs_id'];
                $this->date[$i]=$result['absdate'];
                $i++;
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
    public function setAbsence($day,$month, $user, $absid)
    {

             if($this->isPublicHoliday($month,$day)) {
                $sql="INSERT INTO user_absence (day,month, abs_id,user_is) VALUES (".$day.','.$month.','.$absid.','.$userid.")";
                $inf=parent::Insert($query);
                echo $inf;
              }
   }
}
