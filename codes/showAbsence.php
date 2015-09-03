<?php
session_start();
require 'absence.php';
if(isset($_POST['id'])) {
	     $absence = $_POST['id'];
	     $userid = $_SESSION['userid'];
	     $obj = new db\calendar();
	     $inf = $obj->getAbsence($absence);
       //var_dump($inf);
      
        echo "<ul class='dropdown-menu'>";
        foreach($inf as $row) {
          echo '<li>'.$row['datee'].'</li>';
         }
        echo "</ul>";
     //   echo json_encode($arr);

  //    foreach($inf as $row){
//
//     echo "<option>" . $row['datee'] . "</option>";
   // }
     }