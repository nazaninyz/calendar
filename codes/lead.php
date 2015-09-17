<?php
session_start();
//session_regenerate_id();
require "users.php";
try {
    if (isset($_POST["id_token"]) && isset($_POST["userID"])) {
        $uid = $_POST['userID'];
        $obj=new db\users();
        $result=$obj->userExist($uid);
        if ($result) {
            foreach ($result as $row) {
               $_SESSION['userid']=$row['id'];
               echo true;
            }
            $_SESSION['name']=$uid;
        }
        else {
           echo false;
        }
    } else {
         $exception="userID or googleAPI tokens hasn't been set ";
         echo $exception;
      }
} catch (Exception $e) {
               echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
