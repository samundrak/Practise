<?php 

include 'src/Register.php';

$register = new Register;
if($register->is_session()) $register->redirect();
  
  if(isset($_POST['submit'])){
      $data = array(
        'Firstname'  => $_POST['fname'],
        'Lastname'  => $_POST['lname'],
        'Gender'    => $_POST['gender'],
        'Username'  => $_POST['username'],
        'Password'  => $_POST['password'],
        'Email'     => $_POST['email'],
        'Address'   => $_POST['address']
        );

      $pass =  true;

      foreach ($data as $var => $value) {
        if(empty($value)){
           echo $var . " is empty!";
           $pass =  false;
           break;
        }
      }

      
      if($pass){
  			$db = new DBCOnnection();
  			$register->setDB($db->connect());
  			if($register->verification('email',$data['Email']) && 
  				$register->verification('username',$data['Username'])){
  			$register->setFirstname($data['Firstname']);
  			$register->setLastname($data['Lastname']);
  			$register->setGender($data['Gender']);
  			$register->setUsername($data['Username']);
  			$register->setPassword($data['Password']);
  			$register->setEmail($data['Email']);
  			$register->setAddress($data['Address']);
        $register->setIsDoctor($_POST['is_doctor']);
  		   if($register->insert() != -1){
  		   	$register->redirect();
  		   }

  		}else{

  			echo Register::getMessage();
  		}

  	}
  		 
  }
?>