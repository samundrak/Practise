<?php
include('connect.php');

$id = $_POST['id'];
$title=$_POST['title'];
$ingredients=$_POST['ingredients'];
$time=$_POST['time'];
$steps=$_POST['steps'];

$q = "update detail set title = '$title', ingredients='$ingredients', time='$time', steps='$steps' where id= '$id'";
mysql_query($q);
header("location:my_recipe.php");
?>