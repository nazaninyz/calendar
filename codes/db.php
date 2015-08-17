<?php
namespace dataBase;
abstract class DataBase
{
   private $conn;
   function __construct()
    {
     try {
        $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
        session_start();
         } catch(PDOException $e)
          {
            echo "Connection failed: " . $e->getMessage();
          }


   }
   public function Select($query)
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
   public function Insert($query)
   {      
      try {
             self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $stmt = $dbh->prepare($query);
             $stmt->execute();
             $sts='done';
          } catch(PDOException $e) { 
               $sts=$e->getMessage();
            }
            return $sts;
  }
}