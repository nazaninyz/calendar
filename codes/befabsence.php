<?php
session_start();
require 'absence.php';
    if(isset($_REQUEST['absence']) && isset($_REQUEST['date'])) {
       $objDb=new db\DataBase();
       $absence=$_REQUEST['absence'];
       $query="SELECT id from absence where kind LIKE :absence";
       $params= array(':absence'=> $_REQUEST['absence']);
       $absence_id=$objDb->Select($query,$params);
       $query='select id from user where user_id like :userid ';
       $params= array(':userid'=> $_SESSION['name']);
       $user_id=$objDb->Select($query,$params);
       $userId=$user_id[0];
       $Uid=(int)$userId;
       var_dump($Uid);
       $date=explode('/',$_REQUEST['date']);
       $obj=new db\calendar();
       $absid=$absence_id[0];
       $Aid=(int)$absid;
       $day=(int)$date[1];
       $month=(int)$date[0];
       $year=(int)$date[2];
       var_dump($date[0]);
       $result=$obj->setAbsence($month,$day,$year, $Aid, $Uid);
       echo $result;
    }


