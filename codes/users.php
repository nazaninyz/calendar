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
        if (sizeof($inf)) {
            $sts=true;
        }
        return $sts;
    }

    public function getUserId()
    {
        $query='SELECT id from user where user_id like :userid';
        $params= array(':userid'=> $_SESSION['name']);
        $user_id=parent::Select($query, $params);
        foreach ($user_id as $row) {
              $Uid=$row['id'];
        }
        return $Uid;
    }
}
