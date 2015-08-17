<?php
require 'db.php'
namespace absence;
class Calendar extends DataBase
{
    public $absence;
    public $date;
    public $counter;
    public function countAbsence($user)
    {
            $query="SELECT absdate,abs_id FROM user_absence where user_id=".$user." order by absdate";
            $inf=parent::Select($query);
            $i=0;
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            while ($result = $stmt->fetch()) {
                $this->counter++;
                $this->absence[$i]=$result['abs_id'];
                $this->date[$i]=$result['absdate'];
                $i++;
            }
            echo $inf;
   
    } 
    
    public function setAbsence($datee, $user, $absid)
    {
      
             $sql="INSERT INTO user_absence (absdate, abs_id,user_is) VALUES (".$adate.','.$absid.','.$userid.")";
             $inf=parent::Insert($query);
             echo $inf;
   }
}
