<?php
namespace db;
require "db.php";
class users extends DataBase
{
public $userInf= array();
public function userInformation($uid)
{
  $query="select * from user where user_id like :uid";
  $params= array (':uid' => $uid);
  $inf=parent::Select($query,$params);
  $i=0;
    $this->userInf[$i]=$inf['id'];
    $this->userInf[$i]=$inf['user_id'];
    $this->userInf[$i]=$inf['username'];
    $i++;
  return $this->userInf;
}
public function userExist($uid)
{
  $sts=false;
  $query='select * from user where user_id like :uid';
  $params= array (':uid' => $uid);
  $inf=parent::Select($query,$params);
  if(sizeof($inf))
  {
    $sts=true;
  }
  return $sts;
}

public function getUserId()
{
       $query='SELECT id from user where user_id like :userid ';
       $params= array(':userid'=> $_SESSION['name']);
       $user_id=parent::Select($query,$params);
       foreach($user_id as $row) {
        $Uid=$row['id'];
      }
       
      return $Uid;
}
}
