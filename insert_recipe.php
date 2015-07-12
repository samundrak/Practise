<?php
session_start();
include("connect.php");
// $author_id=$_SESSION['id'];

$name=$_POST['name'];
$address=$_POST['address'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];

$a = "INSERT INTO `patient_info`(`name`, `address`, `age`, `gender`, `phone`) 
VALUES ('$name', '$address', '$age', '$gender', '$phone')";

if(mysql_query($a))
{
	header("location:add_recipe.php");
}
else
{
	echo "A problem occurs while entering a data.";
}
?>