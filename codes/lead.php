<?php 
session_start();
require "users.php";
if(isset($_POST["id_token"])&&isset($_POST["userID"]))  {
    $uid = $_POST['userID'];
    $obj=new db\users();
    $result=$obj->userExist($uid);
    if($result) {
       echo'welcome';
       $_SESSION['name']=$uid;
       var_dump($obj->getUserId());
       $_SESSION['id']=$obj->getUserId();
    }
}
else
{
	echo 'kkk';
}