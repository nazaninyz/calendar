<?php
namespace db;

use \PDO;

class DataBase
{
    private $conn;
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=".'127.0.0.1'.";dbname=company", 'nazanin', '12345678');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function select($query, array $params = [])
    {
        try {
            $stmt = $this->conn->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute($params);
            $inf = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
                 $inf=$e->getMessage();
        }
            return $inf;
    }
    public function insert($query, array $params = [])
    {
        try {
               $stmt = $this->conn->prepare($query, array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
               $stmt->execute($params);
               $sts='Inserted successfully';
        } catch (PDOException $e) {
                 $sts=$e->getMessage();
        }
            return $sts;
    }
}
