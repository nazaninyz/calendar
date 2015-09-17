<?php
namespace db;

require 'db.php';
class Calendar extends DataBase
{
   
    public function isPublicHoliday($date)
    {
        $sts=0;
        $date=explode('/', $date);
        $day=(int) $date[1];
        $month=(int) $date[0];
        $xml = simplexml_load_file("holidays.xml");
        $query='//month[@name='.$month.']';
        $result = $xml->xpath($query);
        foreach ($result as $row) {
            if ($day == $row->day) {
                $sts=1;
            }
        }
     
        return $sts;
    }

    public function setAbsence($datee, $absid)
    {
        if ($this->isPublicHoliday($datee)) {
                echo "public holiday";
        } else {
                        $userid=$_SESSION['userid'];
                        $date=explode('/', $datee);
                        $month=(int)$date[0];
                        $day=(int)$date[1];
                        $year=(int)$date[2];
                        date_default_timezone_set('Europe/Ljubljana');
                        $current=date('Y');
                        if(!($year > $current)) {
                            $query='SELECT user_id from userabsence where user_id like :userid and month like :month and day like :day and year like :year';
                            $params= array(':userid' =>$userid , ':month' => $month , ':year' => $year, ':day' => $day);
                            $sts=parent::Select($query, $params);
                            if (!$sts) {
                                $Aid=$this->getAbsId($absid);
                                $sql="INSERT INTO userabsence (month,year,abs_id, user_id, day) VALUES (:month, :year, :Aid, :userid, :day)";
                                $params= array(':Aid'=>$Aid ,':userid' =>$userid , ':month' => $month , ':year' => $year, ':day' => $day);
                                $inf=parent::Insert($sql, $params);
                                echo $inf;
                            } else {
                                  $inf='Inserted before';
                                  echo $inf;
                              }
                        } else {
                            $inf="you can't insert the year is not current year";
                            echo $inf;
                        }
        }
        return $inf;
    }

    private function getAbsId($absname)
    {
        $query='SELECT id from absence where kind LIKE :absname';
        $params= array(':absname' => $absname);
        $inf=parent::Select($query, $params);
        foreach ($inf as $row) {
            $Aid=(int)$row['id'];
        }
        return $Aid;
    }



    public function getAbsence($month, $year)
    {

        $userid = $_SESSION['userid'];
        $sql='Select kind, day, year, month From absence , userabsence where abs_id = absence.id and user_id like :userid AND month LIKE :month AND year LIKE :year';
        $params = array(':userid' => $userid , ':year' => $year, ':month' => $month);
        $abs = parent::Select($sql, $params);
        return $abs;
    }
}
