<?php
include 'Members.php';

 class Doctor extends Members{
public static $message = "";


	 
	function selectAppointment(){
		if(!empty($_GET['type']) && !empty($_GET['of'])){
			$type = $_GET['type'];
			$of = $_GET['of'];

			$do = $type === "confirm" ? 'confirmed' : 'canceled';
			$query = " SELECT `id`,`current_user` FROM `appointment` WHERE `id` =  '".$of."' AND `doctor`= '".$this->getFirstName()." ".$this->getLastName()."'";
			$result =  $this->getDB()->query($query);
			$this->fetchData($this->getSessionUser());
			if($result->num_rows >= 0 ){
				$row = $result->fetch_assoc();
				$user =  $row['current_user'];

				$tempmem = new Members();
				$tempmem->setDB($this->getDB());
				$tempmem->fetchData($user);
				echo $user;
				echo $tempmem->getEmail();	
				
				if($type === 'confirm'){
				$query = "UPDATE `appointment` SET `is_approved` = '1' WHERE `id` ='".$of."' AND `doctor`='".$this->getFirstName()." ".$this->getLastName()."'";
				Members::sendMail($tempmem->getEmail(),"Your appointment has been approvedd");	
				
				}else{
				$query = "UPDATE `appointment` SET `is_approved` = '0' WHERE `id` ='".$of."' AND `doctor`='".$this->getFirstName()." ".$this->getLastName()."'";
				Members::sendMail($tempmem->getEmail(),"Your appointment has been canceled");	
				
				}

				$result = $this->getDB()->query($query);
				if($this->getDB()->affected_rows  >0 ){
					$msg = "Appointment has been ".$do;
					self::setMessage($msg);  
			}else{
				$msg = "You are not allowed to ".$do." this appointmnet";
				self::setMessage($msg);  
				
			}
				}else{
				$msg = "You are not allowed to ".$do." this appointmnet";
				self::setMessage($msg) ; 
			}
			}
		}
	

	
	function getAppointMentList(){
		$query = "SELECT * FROM `appointment` where `doctor` ='".$this->getFirstName()." ".$this->getLastName()."'";
		$result = $this->getDB()->query($query);
		if($result->num_rows  <= 0 ){
			echo '<tr><td>No Appointment for you</td></tr>';
		}else{
		  while($row = $result->fetch_assoc()){
		  	// $tempMem =  new Members;
		  	// $tempMem->setDB($this->getDB());
		  	// $tempMem->fetchData($row['current_user']);

		  	 echo '<tr>';
		  	 echo '<td>'.$row['patient_user'].'</td>';
		  	 echo '<td>'.$row['appointment_type'].'</td>';
		  	 echo '<td>'.$row['mobile'].'</td>';
		  	 echo '<td>'.$row['age'].'</td>';
		  	 echo '<td>'.$row['gender'].'</td>';
		  	 echo '<td>'.$row['address'].'</td>';
		  	 $status = $row['is_approved'] === '0' ? 'confirm' : 'cancel';
		  	 echo '<td><a href="?type='.$status.'&of='.$row["id"].'">'.$status.'</a></td>';
		  	 echo '</tr>';
		  }
		}
	}



static function getMessage(){
return self::$message;
}

static function setMessage($message){
	self::$message = $message;
}
}

 
?>
