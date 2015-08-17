<?php
require 'absence.php';
require 'vendor/autoload.php';
interface PHPUnit_Extensions_Database_DB_IDatabaseConnection
{
    public function createDataSet(Array $tableNames = NULL);
    public function createQueryTable($resultName, $sql);
    public function getRowCount($tableName, $whereClause = NULL);
}



class ConnectionTest extends PHPUnit_Extensions_Database_TestCase
{
    public function testCreateDataSet()
    {
        $tableNames = array('guestbook');
        $dataSet = $this->getConnection()->createDataSet();
    }
    public function testCreateQueryTable()
    {
        $tableNames = array('guestbook');
        $queryTable = $this->getConnection()->createQueryTable('guestbook', 'SELECT * FROM guestbook');
    }

}

