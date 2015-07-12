<?php 

class Login{

private $username,$password,$db;
	
	function setDB($db){
		$this->db = $db;
	}

	function getDB(){
		return $this->db;
	}

	function setUsername($username){
		$this->username = $username;
	}

	function setPassword($password){
		$this->password = $password;
	}

	function getUsername(){
		return $this->username;
	}

	function getPassword(){
		return md5($this->password);
	}

	public function Verification(){
		$query =  "SELECT * FROM `members` WHERE `username` = '".$this->getUsername()."' AND `password`='".$this->getPassword()."'";
		$result = $this->db->query($query);
		if($result->num_rows >0){
			return true;
		}else{
			return false;
		}

	}

	public function createSession(){
		
		session_start();
		$_SESSION['user'] =  $this->username;
		return true;
	}

	public function redirect(){
		header("Location: home_page.php");
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