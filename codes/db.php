<?php
  

  abstract class DataBase
   {
   	  private $servername;
   	  private $username;
   	  private $password;
   	  static $conn;


  function __construct()
   {
     try {
        $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
        session_start();
         }
     catch(PDOException $e)
         {
        echo "Connection failed: " . $e->getMessage();
         }
   }

}
