<?php 
include 'DBConnection.php';
include 'Details.php';

class Register extends Details{
private $db;
public static $message;

	function setDB($db){
		$this->db =  $db;
	}

	function getDB(){
		return $this->db;
	}

   function __construct(){
   	self::$message = "";
   }

   function verification($type,$value){
   	$query   = "SELECT `id` FROM `members` WHERE `".$type."` = '".$value."'";
   	$result = $this->db->query($query);
    	if($result->num_rows == 0 ){
   		return true;
   	}else{
   		self::$message = $type." has been already registered";
   		return false;
   	}
   }
 
   function insert(){
   	$query =  "INSERT INTO  `members` (
`id` ,
`username` ,
`password` ,
`email` ,
`created_on` ,
`is_admin` ,
`firstname` ,
`lastname` ,
`gender` ,
`address`,
`is_doctor`
)
VALUES (
NULL ,  '".$this->getUsername()."',
  '".md5($this->getPassword())."',
    '".$this->getEmail()."', NOW( ) ,  '0', 
     '".$this->getFirstname()."',  
     '".$this->getLastname()."',  
     '".$this->getGender()."',  
     '".$this->getAddress()."',
     '".$this->getIsDoctor()."'
)
";
	  $result = $this->db->query($query);
    // echo $result->err
	  self::$message = "Registered SuccessFully";
    if($this->getIsDoctor() == 1){
      $query = "INSERT INTO `doctor_info` VALUES(NULL,'".$this->getFirstname() ." ".$this->getLastname()."','0','0')";
      $this->db->query($query);
    }
    return $this->db->affected_rows;
   }

   static function redirect(){
   	header("Location: index.php");
   }

   static function getMessage(){
   	return self::$message;
   }

   public function is_session(){
      session_start();
      if(empty($_SESSION['user'])){
        return false;
      }else{
      return true;
       }
  }
 }
?>