<?php
class logIn
{
	private $dbusername;
	private $dbpassword;
	private $servername;
	private $table;
	private $user;
	private $pass;
	private $tblcol1;
	private $tblcol2;
	static $conn;
	public $error;
    function __construct()
    {
      session_start();
      if (isset($_POST['submit']))
       {
         if (empty($_POST['username']) || empty($_POST['password']))
          {
             $this->error = "Username or Password is invalid";
          }
         else
          {
          	setUser();
          }
    }


   private function setUser()
    {
     // $this->username=$_POST['username'];
      //$this->password=$_POST['password'];
      //$this->validation();
    }
   public function Delete($lout)
   {
     //'delete from login where id='.$lout;
   }
   private function validation()
   {
   	//  if(self::$conn)
   	 // $username = stripslashes($this->username);
     // $password = stripslashes($this->password);
     // $username = mysql_real_escape_string($this->username);
     // $password = mysql_real_escape_string($this->password);
     // $db = mysql_select_db("company", $connection);
     // $query = mysql_query("select * from login where password='$password' AND username='$username'", );
      //$rows = mysql_num_rows($query);
      //if ($rows == 1)
       //{
        // $_SESSION['login_user']=$this->username; 
         //header("location: profile.php"); 
       //}
      //else
       //{
        // $this->error = "Username or Password is invalid";
       //}

   }






}
