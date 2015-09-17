<?php
require_once('users.php');
class userTest extends PHPUnit_Framework_TestCase
{
      public function testUser()
      {
        $obj=new db\users();
    	$result=$obj->userExist('nazanin.yz94@gmail.com');
    	$size=sizeof($result);
    	$this->assertEquals($size, 1) ;
    	    	$result=$obj->userExist('nazanin.4@gmail.com');
    	$size=sizeof($result);
    	$this->assertEquals($size, 0) ;

      }    
}