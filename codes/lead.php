<?php
session_start();
session_regenerate_id();
require "users.php";
try {
    if (isset($_POST["id_token"]) && isset($_POST["userID"])) {
        $uid = $_POST['userID'];
        $obj=new db\users();
        $result=$obj->userExist($uid);
        if ($result) {
            $_SESSION['name']=$uid;
            $_SESSION['userid']=$obj->getUserId();
            echo true;
        }
    } else {
        throw new \Exception("can't get the userid or token from google API");
        session_destroy();
    }
} catch (Exception $e) {
               echo 'Caught exception: ',  $e->getMessage(), "\n";
}
