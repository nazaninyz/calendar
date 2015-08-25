<?php 
session_start();
require "users.php";
if(isset($_POST["id_token"])&&isset($_POST["userID"]))  {
    $uid = $_POST['userID'];
    $_SESSION['name']=$uid;
    $obj=new db\users();
    $result=$obj->userExist($uid);
    if($result) {
       echo'welcome';
    }
}
else
{
	echo 'kkk';
}