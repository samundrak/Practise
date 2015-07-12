<?php include 'ctrl/LoginCtrl.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Gohealth-e</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
</head>
<body>
	<div class="mainwrapper">
		<div class="wrapper">
			<div class="top">
				<div class="topleft">
					<img src="image/logo2.png">
				</div>
				<div class="topright">
					<img src="image/final.png">
				</div>
			</div>
			<div class="leftside">
				<form method="post" action="">
					<div class="login"> 
						<table>
							<th colspan="3" align="center"> Sign in</th>
							<tr><td colspan="2"><?php if(!empty($_GET['msg'])){ if($_GET['msg']==1){ echo "<h3 style='color:#ff0000'>
							Invalid Username or Password </h3>";}} ?></td></tr>
							<tr>
								<td><label> Username </label></td>
								<td colspan="2"><input type="text" placeholder="Username" required="required" name="username" value="<?php 
								if(isset($_COOKIE['Username'])){ echo $_COOKIE['Username']; }?>"></td>
							</tr> 
							<tr>
								<td><label> Password </label></td>
								<td colspan="2"><input type="password" placeholder="Password" required="required" name="password" value="<?php 
								if(isset($_COOKIE['Password'])){ echo $_COOKIE['Password']; }?>"></td>
							</tr>
							<tr>
								<td></td>
								<td><br><input type="checkbox" name="remember_me" value="uncheck">Remember me &nbsp &nbsp &nbsp<input type="submit" 
								value="Login" name="submit"></td>
							</tr>
						</table>
						<hr>
						<p align="right"><a href="registration.php"> Not a member? Sign Up</a> </p>
					</div>
				</form>
			</div>
			<div class="rightside">

	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
					
			</div>
			<br clear="all">
			
			</div></div>
		</body>
		</html>
 