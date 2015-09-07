<?php
session_start();
require 'absence.php';
if(isset($_POST['id']) && isset($_POST['slide'])) {
	     $absence = $_POST['id'];
	     $userid = $_SESSION['userid'];
       $month=$_POST['slide'];
       $year=date('Y');
	     $obj = new db\calendar();
	     $inf = $obj->getAbsence($absence,$month,$year);
       $makes= array();  
       foreach($inf as $row) {
        $row=$inf;
        array_push($makes, $row['datee']);
       }  
        echo json_encode($makes);
     }