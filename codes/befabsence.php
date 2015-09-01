<?php
session_start();
require 'absence.php';
    if(isset($_REQUEST['absence']) && isset($_REQUEST['date'])) {
       $obj=new db\calendar();
       $event=$_REQUEST['absence'];
       $Aid=$obj->getAbsId($event);
       $date=$_REQUEST['date'];
       $result=$obj->setAbsence($date, $Aid, $_SESSION['id']);
       echo $result;
    }


 