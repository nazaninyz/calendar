<?php
session_start();
require 'absence.php';
if (isset($_GET['id'])) {
       $month = $_GET['id'];
       $year=date('Y');
       
       $obj = new db\calendar();
       $abs = $obj->getAbsence($month, $year);
       $makes= array();
    if (is_array($abs)) {
        foreach ($abs as $row) {
                   $makes [] = array(
                     'day' => $row['day'],
                     'month' => $row['month'],
                     'year' => $row['year'],
                     'kind' =>$row['kind']
                   );
        }
                header('content-type:application/json');
                echo json_encode($makes);
    }
}
