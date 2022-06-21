<?php
include "connects.php";
class dbbregister{
private static $istance="null";
public  $name;
public $email;
public $pass;
public $mobile;
public $address;
 private $conn;
 public $namer;
 public $emailer;

private  function __construct(){
    
     $singleton = Singleton::getinstance();
     $this->conn = $singleton->getConnection();
     $this->name=$_POST['name'];
      $this->email=$_POST['email'];
      $this->pass=$_POST['password'];
      $this->mobile=$_POST['mobile'];
     $this->address=$_POST['address'];
      try{
          $sql="INSERT INTO register(name,email,password,mobile_no,address) value('$this->name','$this->email','$this->pass','$this->mobile','$this->address')";
           $query=$this->conn->query($sql);
     }  
     catch(Exception $e){
      echo 'error in inserting ' .$e->getMessage();

     }

}
public static function getistance(){
    if(self::$istance=="null")
    {
      self::$istance = new dbbregister();
    }
   
    return self::$istance;
}

 }
 
 //dbbregister::getistance();
?>
<!-- <script type="text/javascript">
alert("registerd successfully")
</script> -->
