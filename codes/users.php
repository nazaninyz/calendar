<?php
namespace db;

require "db.php";
class Users extends DataBase
{
    public function userExist($uid)
    {
        $sts=false;
        $query='select * from user where user_id like :uid';
        $params= array (':uid' => $uid);
        $inf=parent::Select($query, $params);
        return $inf;
    }
}
