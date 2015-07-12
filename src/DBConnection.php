<?php 

class DBConnection{

private $host,
		$user,
		$password,
		$database;

	public function __construct(){
		$this->host 		= 	"localhost";
		$this->user 		= 	"root";
		$this->password 	= 	"samundra";
		$this->database 	= 	"preace";
	}

	public function connect(){
	$db  = new mysqli($this->host,
						  $this->user,
						  $this->password,
						  $this->database);
	if($db->connect_errno >0){
		exit('Error .. Error .. Error');
	}
  	return $db;
  }
}
?>