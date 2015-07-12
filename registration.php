<?php include 'ctrl/RegisterCtrl.php'; ?>
<html>
<head>
	<title> Registration Form </title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
		<div class="reg">
			<form method="post" action="">
				<div class="regin">
					<table>
						<th colspan="2">Registration Form</th>
						<tr>
							<td><label>First Name</label></td>
							<td><input type="text" name="fname" required="required"></td>
						</tr>
						<tr>
							<td><label>Last Name</label></td>
							<td><input type="text" name="lname" required="required"></td>
						</tr>
						<tr>
							<td><label>Gender</label></td>
							<td><input type="radio" name="gender" value="male">Male &nbsp &nbsp &nbsp
								<input type="radio" name="gender" value="female">Female
							</td>
						</tr>
						<tr>
							<td><label>Username</label></td>
							<td><input type="text" name="username" required="required"></td>
						</tr>
						<tr>
							<td><label>Password</label></td>
							<td><input type="Password" name="password" required="required"></td>
						</tr>
						<tr>
							<td><label>Email</label></td>
							<td><input type="text" name="email" required="required"></td>
						</tr>
						<tr>
							<td><label>Address</label></td>
							<td><input type="text" name="address" required="required"></td>
						</tr>
						<tr>
							<td><label> </label></td>
							<td><input type="checkbox" name="is_doctor" required="required"> I'm Doctor</td>
						</tr>
						<tr>
							<td></td>
							<td align="center"><br><input type="submit" value="Sign Up" name="submit"></td>
						</tr>
					</table>
				</div>
			</form>
		</div>
		<div class="footer">
				<p>Copyright 2015 Gohealth-e |  Art and Design by Sangeeta <a href="http://www.twitter.com"><img src="image/twitter.png" alt="twitter" id="twitter"/></a>
					<a href="http://www.facebook.com"><img src="image/fb.png" alt="facebook" id="facebook"/></a> </p>
				</div>
	</div></div>
</body>
</html>