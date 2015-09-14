<?php
session_start();
require 'absence.php';
if(isset($_GET['id'])) {
    $month = $_GET['id'];
    $year=date('Y');
    //   $obj = new db\calendar();
    //   $inf = $obj->getAbsence($absence,$month,$year);
     $obj1 = new db\DataBase();
     $sql='Select kind, datee From absence , userabsence where abs_id = absence.id and user_id like :userid AND month LIKE :month AND year LIKE :year';
     $userid=$_SESSION['userid'];
     $params = array(':userid' => $userid , ':year' => $year, ':month' => $month);
     $abs = $obj1->Select($sql, $params);
  
     
       $makes= array();  
       $row = array();
      // var_dump($abs);
       $size=sizeof($abs);
      if (is_array($abs)) {
              foreach($abs as $row) {
                   
                   $makes [] = array(
                     'date' => $row['datee'],
                     'kind' =>$row['kind']
               );
              }
            //  var_dump($makes);
              header('content-type:application/json');
             echo json_encode($makes);

            //     var_dump($row);
       }

}
