<?php
class Singleton{
private static $instance="null";
private $conn;
private $servername="localhost";
 private $username="root";
private $password="";
private $dbname="librarymgmt";
private  function __construct(){
    $this->conn=new mysqli($this->servername,$this->username,$this->password,$this->dbname);
     if ($this->conn->connect_error) {
        die("Connection failed: ");
      }
     // echo "Connected successfully";

}

public static function getinstance(){
    if(self::$instance=="null")
    {
      self::$instance = new Singleton();
    }
   
    return self::$instance;
}
public function getConnection()
  {
    return $this->conn;
  }
}
$singleton = Singleton::getinstance();
?>