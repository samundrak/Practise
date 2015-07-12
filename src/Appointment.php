<?php 
 
class Appointment   
{
	private $patientUser,
			$doctor,
			$date,
			$time,
			$speciality,
			$appointmentType,
			$hospital,
			$db,
			$gender,$age,$currentUser,$currentAddress,
			$mobile;

	private static $message;

	public function getDB(){
		return $this->db;
	}

	public function setDB($db){
		$this->db =  $db;
	}

	public function getMobile(){
		return $this->mobile;
	}

	public function setMobile($mobile){
		$this->mobile =  $mobile;
	}

	public static function getMessage(){
		return self::$message;
	}

	public static function setMessage($message){
		self::$message =  $message;
	}

	public function verification(){
		$query = "SELECT `id` FROM `appoinment` WHERE `patient_user`='".$this->getPatientUser()."' AND `doctor`='".$this->getDoctor()."' AND `date`='".$this->getDate()."' AND `time`='".$this->getTime()."' AND `is_approved`='1'";
		$result = $this->db->query(" SELECT * FROM `appointment` ");
		if($result->num_rows >= 0){
			self::$message = "Appointment registered you will inform soon";
			return true;

			//is empty
		}else{
			self::$message = 'An appointment with this doctor of same time has been already registred!';
			return false;
		}
	}	

	public function insert(){
	$query =  "INSERT INTO  `appointment` (
`id` ,
`patient_user` ,
`doctor` ,
`date` ,
`time` ,
`speciality` ,
`appointment_type` ,
`hospital` ,
`created_at` ,
`is_approved` ,
`mobile`,
`gender`,
`age`,
`current_user`,
`address`
)
VALUES (
NULL ,  
'".$this->getPatientUser()."', 
 '".$this->getDoctor()."',  
 '".$this->getDate()."',
   '".$this->getTime()."', 
    '".$this->getSpeciality()."',
      '".$this->getAppointmentType()."',  
      '".$this->getHospital()."', 
      	NOW( ) ,  
      		'0',
      		  '".$this->getMobile()."',
      		  '".$this->getGender()."',
      		  '".$this->getAge()."',
      		  '".$this->getCurrentUser()."',
      		  '".$this->getCurrentAddress()."'
)
";
	 
		$this->db->query($query);
	} 

	function setCurrentAddress($address){
		$this->currentAddress = $address;
	}

	function getCurrentAddress(){
		return $this->currentAddress;
	}

	function setCurrentUser($user){
		$this->currentUser =$user;
	}

	function getCurrentUser(){
		return $this->currentUser;
	}

	public function setPatientUser($patientUser){
		$this->patientUser = $patientUser;
	}

	public function setDoctor($doctor){
		$this->doctor = $doctor;
	}

	public function setDate($date){
		$this->date = $date;
	}

	public function setTime($time){
		$this->time = $time;
	}

	function getAge(){
		return $this->age;
	}

	function setAge($age){
		$this->age =  $age;
	}

	function getGender(){
		return $this->gender;
	}

	function setGender($gender){
		$this->gender = $gender;
	}
	public function setSpeciality($speciality){
		$this->speciality =  $speciality;
	}

	public function setAppointmentType($appointmentType){
		$this->appointmentType = $appointmentType;
	}

	public function setHospital($hospital){
		$this->hospital =  $hospital;
	}

	public function getPatientUser(){
		return $this->patientUser;
	}

	public function getDoctor(){
		return $this->doctor;
	}

	public function getDate(){
		return $this->date;
	}

	public function getTime(){
		return $this->time;
	}

	public function getSpeciality(){
		return $this->speciality;
	}

	public function getAppointmentType(){
		return $this->appointmentType;
	}

	public function getHospital(){
		return $this->hospital;
	}
	 
}
 ?>