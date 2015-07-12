<?php  
include 'MembersCtrl.php';
include 'src/Appointment.php';

   if(isset($_POST['submit'])){
     $data = array(
        'name'          => $_POST['name'],
        'address'       => $_POST['address'],
        'age'           => $_POST['age'],
        'gender'        => $_POST['gender'],
        'hospital'      => $_POST['hospital'],
        'speciality'    => $_POST['speciality'],
        'appointment'   => $_POST['appointment'],
        'date'          => $_POST['date'],
        'time'          => $_POST['time'],
        'phone'         => $_POST['phone'],
        'doctor'        => $_POST['doctor'],
        'age'           => $_POST['age'],
        'gender'        => $_POST['gender'],
        'address'       => $_POST['address']
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
      $dbo = new DBConnection();
      $db = $dbo->connect();
      $appointment = new Appointment();
      $appointment->setDB($db);
      $appointment->setPatientUser($data['name']);
      $appointment->setDoctor($data['doctor']);
      $appointment->setDate($data['date']);
      $appointment->setTime($data['time']);
      $appointment->setSpeciality($data['speciality']);
      $appointment->setAppointmentType($data['appointment']);
      $appointment->setHospital($data['hospital']);
      $appointment->setMobile($data['phone']);
      $appointment->setAge($data['age']);
      $appointment->setGender($data['gender']);
      $appointment->setCurrentUser($members->getSessionUser());
      $appointment->setCurrentAddress($data['address']);
      if($appointment->verification()){
        $appointment->insert();
        Members::sendMail($members->getEmail(),"You have booked an appointment , You will be inform soon after Approved by doctor. ThankYou");
        echo Appointment::getMessage();
      }
  } }

?>