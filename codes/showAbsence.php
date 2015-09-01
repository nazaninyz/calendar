<?php
session_start();
require 'absence.php';
if(isset($_REQUEST['id'])) {
	   $absence=$_REQUEST['id'];
	   $userid=$_SESSION['id'];
	   $obj = new db\calendar();
	   $absid= $obj->getAbsId($absence);
       $query='SELECT * from user_absence where user_id LIKE :userid AND abs_id LIKE :absid ORDER BY datee limit 10';
       $params= array(':absid' => $absid, 'userid' => $userid);
       $obj = new db\DataBase();
       $inf=$obj->Select($query,$params);
       var_dump($inf);

  }