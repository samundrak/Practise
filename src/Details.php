<?php 
 
abstract class Details{
	private $firstName,
		$lastName,
		$email,
		$gender,
		$username,
		$address,
        $isDcotor,
		$password;

    public function setFirstName($firstName){
    	$this->firstName = $firstName;
    }

    public function setIsDoctor($is_doctor){
        if($is_doctor === 'on')
            $this->isDoctor = 1;
        else 
            $this->isDoctor = 0;
    }

    public function getIsDoctor(){
        return $this->isDoctor;
    }
    public function setLastName($lastName){
    	$this->lastName = $lastName;
    }

    public function setEmail($email){
    	$this->email = $email;
    }

    public function setGender($gender){
    	$this->gender =  $gender;
    }

    public function setUsername($username){
    	$this->username =  $username;
    }

    public function setPassword($password){
    	$this->password = $password;
    }

    public function setAddress($address){
    	$this->address = $address;
    }

    public function getFirstName(){
    	return $this->firstName;
    }

    public function getLastName(){
    	return $this->lastName;
    }

    public function getEmail(){
    	return $this->email;
    }

    public function getGender(){
    	return $this->gender;
    }

    public function getUsername(){
    	return $this->username;
    }

    public function getPassword(){
    	return $this->password;
    }

    public function getAddress(){
    	return $this->address;
    }
}

?>