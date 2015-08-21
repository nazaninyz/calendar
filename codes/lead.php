<?php
require 'users.php';
if(isset($_POST['code'])&&sset($_POST['userID']))  {
    $uid = $_POST['userID'];
    $obj=new db\users();
    $result=$obj->userExist($uid);
    if($result) {
       echo'welcome';
    }
}
?>
<html>

</html>
