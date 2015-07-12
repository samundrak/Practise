<?php
session_start();
include("connect.php");

$username = $_POST['username'];
$password = $_POST['password'];

$query = "select * from user_info where Username='$username' and Password='$password'";
$res = mysql_query($query);
$data = mysql_fetch_array($res);

$num = mysql_num_rows($res);
if($num==1)
{
	if(isset($_POST['remember_me']))
	{
		//$remember_me = $_POST['remember_me'];
		setcookie('Username',$username);
		setcookie('Password',$password);
	}
	else
	{
		setcookie('Username',$username,time()-1);
		setcookie('Password',$password,time()-1);
	}
	$_SESSION['login']="ok";
	$_SESSION['id']=$data['id'];
	header("location:welcome.php");
}
else
{
	header("location:index.php?msg=1");
}

?>