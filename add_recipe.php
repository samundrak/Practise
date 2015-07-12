<?php 
include 'ctrl/AppointmentCtrl.php';
<<<<<<< HEAD
//from master
=======
//from junior
>>>>>>> junior
?>

<html>
<head>
	<title> Welcome to Gohealth-e </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="JavaScript">
	function send(){		
		alert('Your appointment request has been sent successfully.');
	}
	function func_speciality(){
		var e = document.getElementById("specialityid").value; 
		var h = document.getElementById("hospitalid").value;  
		alert(e);
		var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("finalresults").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","speciality.php?a="+e+"&h="+h,true);
xmlhttp.send();
	}
</script>
<body>
	<div class="mainwrapper"><div class="wrapper">
		<div class="top">
			<div class="topleft">
				<img src="image/logo2.png">
			</div>
			<div class="topright">
				<img src="image/final.png">
			</div>
		</div>
		<div class="navigation">
			<ul>
				<li><a href="home_page.php"> Home </a></li>
				<li><a href="my_recipe.php">  About Us  </a></li>
				<li><a href="add_recipe.php" class="active"> Appointment </a></li>
				<li><a href="logout.php"> Logout </a></li>
			</ul>
		</div>
		<div class="foodright">
			<fieldset style="border-color:#f1d969";> 
				<legend> Patient Information</legend>
				<form action="" method="post" name="frmpatient">
					<table>
						<tr>
							<td><label>Patient Name:</label></td>
							<td><input type="text" name="name" required="required" value="<?=  $members->getFirstname()." ".$members->getLastname();?>"></td>
						</tr>
						<tr>
							<td><label>Address:</label></td>
							<td><input type="text" name="address" required="required" value="<?= $members->getAddress() ?>"></td>
						</tr>
						<tr>
							<td valign="top">Age:<label> </label></td>
							<td><input type="text" name="age" required="required"></td>
						</tr>
						<tr>
							<td valign="top"><label>Gender: </label></td>
							<td><input type="radio" name="gender" value="male" required="required" <?= $members->getGender() == 'male' ? 'checked' : 'nulls'  ?> >Male &nbsp &nbsp &nbsp &nbsp
								<input type="radio" name="gender" value="female" required="required" <?= $members->getGender() == 'female' ? 'checked' : 'nulls'  ?>>Female</td>
							</tr>
							<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							<tr>
								<td valign="top"><label>Phone no: </label></td>
								<td><input type="text" name="phone" required="required"></td>
							</tr>
							<tr>
								<td valign="top"><label>Appointment: </label></td>
								<td><select name="appointment">
									<option value="follow up">Follow-up</option>
									<option value="new problem">New problem</option>
								</select></td>
							</tr>
							<tr>
								<td valign="top"><label>Hospital: </label></td>

								<td ><?php
									$host = "localhost";
									$user = "root";
									$pass = "samundra";
									$database = "preace";
									
									$connection  = mysql_connect($host, $user, $pass) or die ("Couldn't connect to database");  
									mysql_select_db ($database) ;
									$query = "SELECT * from hospital_info";
									$ret = mysql_query ($query, $connection) or die(mysql_error());
									if (!$ret) {
										echo "<p>Something went wrong: " . mysql_error(). "</p>";
									}
									$num_results = mysql_num_rows ($ret) or die(mysql_error());
									if ($num_results == 0) {
										echo "<p>No data selected.</p>";
									}
									else {
										echo "<select name='hospital'>";
										while($row = mysql_fetch_array ($ret)){																						
											echo "<option >" . $row['hospitalname'] . "</option>";											
										}
										echo "</select>";										
									}
									?></td></tr>


									<tr>

										<td><label>Speciality: </label></td>
										<td ><?php
											$connection  = mysql_connect($host, $user, $pass) or die ("Couldn't connect to database");  
											mysql_select_db ($database) ;
											$query = "SELECT * from speciality";
											$ret = mysql_query ($query, $connection) or die(mysql_error());
											if (!$ret) {
												echo "<p>Something went wrong: " . mysql_error(). "</p>";
											}
											$num_results = mysql_num_rows ($ret) or die(mysql_error());
											if ($num_results == 0) {
												echo "<p>No data selected.</p>";
											}
											else {
												echo "<select  name='speciality'>";
												while($row = mysql_fetch_array ($ret)){																						
													echo "<option >" . $row['speciality_name'] . "</option>";											
												}
												echo "</select>";

											}

											mysql_close($connection);
											?></td></tr>

											<tr>
												<td><label>Doctor:</label></td>
												<td id="finalresults"><select name="doctor">
													<option>Please Select Doctor</option>
													<?php
											$connection  = mysql_connect($host, $user, $pass) or die ("Couldn't connect to database");  
											mysql_select_db ($database) ;
											$query = "SELECT * from doctor_info";
											$ret = mysql_query ($query, $connection) or die(mysql_error());
											if (!$ret) {
												echo "<p>Something went wrong: " . mysql_error(). "</p>";
											}
											$num_results = mysql_num_rows ($ret) or die(mysql_error());
											if ($num_results == 0) {
												echo "<p>No data selected.</p>";
											}
											else {
												 while($row = mysql_fetch_array ($ret)){																						
													echo "<option >" . $row['doctorname'] . "</option>";											
												}
												 
											}

											mysql_close($connection);
											?>
												</select></td></tr>

													<tr>
														<td valign="top"><label>Date: </label></td>
														<td><input type="date" name="date" required="required"></td>
													</tr>
													<tr>
														<td valign="top"><label>Time: </label></td>
														<td><select name ="time">
															<option>2:00 to 2:10</option>
															<option>2:10 to 2:20</option>
															<option>2:20 to 2:30</option>
															<option>2:30 to 2:40</option>
															<option>2:40 to 2:50</option>
															<option>2:50 to 3:00</option>
														</select></td>
													</tr>

													<tr>
														<td align="center"><br><input type="submit" value="Send Request" name="submit"></td>
													</tr>
												</table>
											</form>
										</fieldset>
									</div>
									<br clear="all">
									<div class="footer">
										<p>Copyright 2015 Gohealth-e  |  Art and Design by Sangeeta <a href="http://www.twitter.com"><img src="image/twitter.png" alt="twitter" id="twitter"/></a>
											<a href="http://www.facebook.com"><img src="image/fb.png" alt="facebook" id="facebook"/></a> </p>
										</div>
									</div></div>
								</body>
								</html>

