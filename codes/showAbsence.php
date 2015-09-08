<?php
session_start();
require 'absence.php';
echo 'hi';
if(isset($_POST['id']) && isset($_POST['slide'])) {
       $absence = $_POST['id'];
       $userid = $_SESSION['userid'];
       $month=$_POST['slide'];
       $year=date('Y');
       $obj = new db\calendar();
       $inf = $obj->getAbsence($absence,$month,$year);
       $makes= array();  
       $row = array();
      if (is_array($inf)) {
              foreach($inf as $row) {
                 $row = $inf;
                 $makes[] = array(
                 'date' => $row['datee']
               );
              }
              var_dump($row);
              echo 'hiii';
              header('content-type:application/json');
              echo json_encode($makes);
       }
       

}