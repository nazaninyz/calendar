<?php
session_start();
require 'absence.php';
try {
    if (isset($_GET['absence']) && isset($_GET['date'])) {
        $obj=new db\calendar();
        $event=$_REQUEST['absence'];
        $date=$_REQUEST['date'];
        try {
            $result=$obj->setAbsence($date, $event);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    } else {
           $Exception = "can't get the date or event";
           echo $Exception;
    }
} catch (Exception $e) {
               echo 'Caught exception: ',  $e->getMessage(), "\n";
}
