<?php
session_start();
require 'absence.php';
if(isset($_GET['id']) && isset($_GET['slide'])) {
       $absence = $_GET['id'];
       $month=$_GET['slide'];
       $year=date('Y');
       $obj = new db\calendar();
       $inf = $obj->getAbsence($absence,$month,$year);
       $makes= array();  
       $row = array();
       //var_dump($inf);
       $size=sizeof($inf);
      if (is_array($inf)) {
              foreach($inf as $row) {
              	   
              	   $makes [] = array(
                     'date' => $row['datee']
               );
              }
            //  var_dump($makes);
            //  header('content-type:application/json');
             echo json_encode($makes);
             
            //     var_dump($row);
       }
       

}