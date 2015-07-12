 <?php
include('connect.php');

$id = $_GET['id'];
$query = "delete from detail where id = '$id'";
$result = mysql_query($query);

header("location:my_recipe.php");