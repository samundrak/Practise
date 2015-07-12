<?php
session_start();
session_unset($_SESSION['ok']);
header("location:index.php");
?>

