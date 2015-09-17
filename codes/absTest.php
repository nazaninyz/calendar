<?php
require_once('absence.php');
class absenceTest extends PHPUnit_Framework_TestCase
{
    public function testSet()
    {   $_SESSION = array('userid' => 1);
    	$obj=new db\calendar();
    	$result=$obj->setAbsence('09/03/2015', 'illnes');
    	$alert='Inserted before';	
    	$this->assertEquals($result, $alert) ;

    }
    public function testPublicHoliday()
    {   $_SESSION = array('userid' => 1);
    	$obj=new db\calendar();
    	$result=$obj->isPublicHoliday('09/15/2015');
    	$sts=true;	
    	$this->assertEquals($result, $sts) ;
    	$sts=false;
        $result=$obj->isPublicHoliday('09/16/2015');
        $this->assertEquals($result, $sts) ;
    }

}
