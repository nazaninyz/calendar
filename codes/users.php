<?php
require 'db.php'
namespace user;
class users extends DataBase
{
public $userInf= array();
public function userInformation()
{
  $query="select * from user where id=";
  $inf=parent::Select($query);
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
}
