<?php
include("connect.php");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$address=$_POST['address'];

$a="INSERT INTO  `db_recipes`.`user_info` (`id` ,`fname` ,`lname` ,`gender` ,`username` ,`password` ,`email` ,`address`) 
VALUES (NULL ,  '$fname',  '$lname',  '$gender',  '$username',  '$password',  '$email',  '$address')";
if(mysql_query($a))
{
	header("location:index.php");
}
else
{
	echo "Oh no what have you done";
}
?>