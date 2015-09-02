<?php
session_start();
require 'absence.php';
if(isset($_REQUEST['id'])) {
	     $absence = $_REQUEST['id'];
	     $userid = $_SESSION['userid'];
	     $obj = new db\calendar();
	     $inf = $obj->getAbsence($absence);
       //var_dump($inf);
       $arr = array();
       foreach($inf as $result) {
             array_push($arr, $inf);
        }
        echo json_encode($arr);
  }