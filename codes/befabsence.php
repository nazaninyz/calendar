<?php
session_start();
require 'absence.php';
    if(isset($_GET['absence']) && isset($_GET['date'])) {
       $obj=new db\calendar();
       $event=$_REQUEST['absence'];
       $date=$_REQUEST['date'];
       $result=$obj->setAbsence($date, $event);
    }


 