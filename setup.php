
<html>
<head>
	<title> Database Setup</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>	
	<div class="wrapper">
		<div class="top">
			<div class="topleft">
				<img src="../image/logo.jpg">
			</div>
			<div class="topright">
				<img src="../image/aa.png">
			</div>
		</div>
		<div class="reg">
			
				<div class="regin">
					<?php
mysql_connect("localhost","root","") or die("could not connect.");
//creating database
mysql_query("create database if not exists `db_recipes`");
//Selecting database
mysql_select_db("db_recipes") or die("Database not connected");
//creating detail table
mysql_query("CREATE TABLE IF NOT EXISTS `detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `author_id` int(11) NOT NULL,
  `steps` text NOT NULL,
  `ingredients` text NOT NULL,
  `time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
)");

//Creating user_info table
mysql_query("CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
)");

?>
Congratulation your database is created sucessfully. <a href="../">Click here</a> to go to home page to utilize the your system.
				</div>
			
		</div>
	</div>
</body>
</html>