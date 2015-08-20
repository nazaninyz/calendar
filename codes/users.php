<?php
namespace db;
require "db.php";
class users extends DataBase
{
public $userInf= array();
public function userInformation($uid)
{
  $query="select * from user where id=$uid";
  $obj= new DataBase();
  $inf=$obj->Select($query);
  $inf->setFetchMode(PDO::FETCH_ASSOC);
  $i=0;
  while ($result = $inf->fetch()) {
    $this->userInf[$i]=$result['id'];
    $this->userInf[$i]=$result['user_id'];
    $this->userInf[$i]=$result['username'];
    $i++;
   }
  return $inf;
}
public function userExist($uid)
{
  $sts=false;
  $query='select * from user where user_id like :userid';
  $params= array (":uid" => $uid);
  $inf=parent::Select($query,$params);echo $inf;
  if(sizeof($inf))
  {
    $sts=true;
  }
  return $sts;
}
}
