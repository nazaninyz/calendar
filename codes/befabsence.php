<?php
session_start();
require 'absence.php';
    if(isset($_REQUEST['absence']) && isset($_REQUEST['date'])) {
       $obj=new db\calendar();
       $event=$_REQUEST['absence'];
      
       $date=$_REQUEST['date'];
       $result=$obj->setAbsence($date, $event);
     //  echo $result;
    }


 