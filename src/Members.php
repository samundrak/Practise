<?php
include 'Details.php';
include 'DBConnection.php';

   class Members extends Details{
private $session,$db;

    static function sendMail($to,$msg){

        $msg = wordwrap($msg,70);

      // send email
      mail($to,"About Apppointment",$msg);
       
    }

    function setDB(){
    	$dbObj = new DBConnection();
    	$this->db = $dbObj->connect();
    }

    function getDB(){
        return $this->db;
    }

   	function logout(){
   		session_start();
   		session_destroy();
   	}

   	function setSessionUser($session){
   		$this->session =  $session;
   	}

   	function getSessionUser(){
   		return $this->session;
   	}

   	function session(){
   		session_start();
   		if(empty($_SESSION['user'])){
   			return false;
   		}else{
   		$this->setSessionUser($_SESSION['user']);

   	   	return true;
   	   }
   }


   	function fetchData($session){
   		$query = "SELECT * FROM `members` WHERE `username`='".$session."'";
   		$result = $this->db->query($query);
   		while ($row = $result->fetch_assoc()) {
   			 $this->setUsername($row['username']);
   			 $this->setFirstName($row['firstname']);
   			 $this->setLastName($row['lastname']);
   			 $this->setAddress($row['address']);
   			 $this->setGender($row['gender']);
   			 $this->setEmail($row['email']);
   		}
   	}

   	function redirect(){
   		if(!$this->session()){
   			header("Location: index.php");
   		}
   	}


    function is($val){
      $query =  "Select `id` from `members` where `username` ='".$this->getSessionUser()."' and `".$val."` ='1'";
      $result = $this->db->query($query);
         if($result->num_rows >  0){
          //this man is doctor

          return true;
        }else{
          //this man is not doctor
          return false;
        } 
    }

     

   }
?>