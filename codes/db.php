<?php
namespace db;

use \PDO;
class DataBase
{
   private $conn;
   function __construct()
    {
     try {
        $this->conn = new PDO("mysql:host=localhost;dbname=company", 'nazanin', '12345678');
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
        session_start();
         } catch(PDOException $e)
          {
            echo "Connection failed: " . $e->getMessage();
          }


   }
   public function Select($query,array $params = [])
   {
     
            $stmt = $this->conn->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute($params);
            $inf=$stmt->fetchAll();
 
    return $inf;
  }
   public function Insert($query)
   {      
      try {
             $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $stmt = $this->conn->prepare($query);
             $stmt->execute();
             $sts='done';
          } catch(PDOException $e) { 
               $sts=$e->getMessage();
            }
            return $sts;
  }
}