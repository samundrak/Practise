<?php 
 include 'src/DBConnection.php';
 include 'src/Login.php';
 
 $login = new Login();
 if($login->is_session()) $login->redirect();
 
 if(isset($_POST['submit'])){
 	if(!empty($_POST['username']) && !empty($_POST['password'])){
 				
 				

				$dbObj    =  new DBConnection();
				$db    	  =  $dbObj->connect();
 				
 				$username = $_POST['username'];
 				$password =  $_POST['password'];

 				
 				$login->setDB($db);
 				$login->setUsername($username);
 				$login->setPassword($password);

 				if($login->verification()){
 					if($login->createSession()){
 						$login->redirect();
 					}
 				}else{
 					echo 'username / password is incorrect';
 				}


 	}
 }

 ?>