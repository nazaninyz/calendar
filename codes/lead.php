<?php 
session_start();    
session_regenerate_id();
require "users.php";
if(isset($_POST["id_token"])&&isset($_POST["userID"]))  {
    $uid = $_POST['userID'];
    $obj=new db\users();
    $result=$obj->userExist($uid);
    if($result) {
       $_SESSION['name']=$uid;
       $_SESSION['userid']=$obj->getUserId();
    }
}
else
{
	echo 'kkk';
}