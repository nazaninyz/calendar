<?php
namespace absence;
class Calendar extends DataBase
{
    public $absence;
    public $date;
    public $counter;
    public function countAbsence($user)
    {
        try {
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = elf::$conn->prepare("SELECT absdate,abs_id FROM user_absence where user_id=:user order by absdate");
            $stmt->bindParam(':user', $user);
            $stmt->execute();
            $i=0;
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            while ($result = $stmt->fetch()) {
                $this->counter++;
                $this->absence[$i]=$result['abs_id'];
                $this->date[$i]=$result['absdate'];
                $i++;
            }
   
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function setAbsence($datee, $user, $absid)
    {
        try {
             self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $stmt = $dbh->prepare("INSERT INTO user_absence (absdate, abs_id,user_is) VALUES (:adate, :absid,:userid)");
             $stmt->bindParam(':adate', $datee);
             $stmt->bindParam(':absid', $absid);
             $stmt->bindParam('userid', $user);
             $stmt->execute();
             echo "New record created successfully";
        } catch (PDOException $e) {
             echo $sql . "<br>" . $e->getMessage();
        }
    }


}
