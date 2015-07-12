<?php 
include 'src/Doctor.php';


  $doctor = new Doctor;

  if(!$doctor->session()){
  	$doctor->redirect();
  	 exit;
  }
  
  $dbObj = new DBConnection;
  $db =  $dbObj->connect();
  $doctor->setDB($db);
    
   if(!$doctor->is('is_doctor')){
   	  echo 'You are not doctor <br> please dont come here again';
   	  exit;
   }

$doctor->selectAppointment();
echo Doctor::getMessage();
$doctor->fetchData($doctor->getSessionUser());
 
?>

<table border="1">
  <tr>
    <td>Patient name</td>
    <td>AppointMent Type</td>
    <td>Contact</td>
    <td>Age</td>
    <td>Gender</td>
    <td>Address</td>
    <td>Status</td>
  </tr>
<?php $doctor->getAppointmentList();?>
</table>