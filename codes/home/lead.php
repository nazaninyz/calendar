<?php
require 'users.php';
if(isset($_POST['userID'])) {
    echo'hiiiii';
    $uid = $_POST['userID'];
    echo $uid;
    $obj=new db\users();
    $result=$obj->userExist($uid);
    if($result) {
       echo'welcome';
    }
}
