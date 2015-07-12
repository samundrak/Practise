<?php
include('connect.php');

$id = $_GET['id'];
$query = "select * from detail where id = '$id'";
$result = mysql_query($query);
$data = mysql_fetch_array($result);
?>

<html>
<head>
	<title> Welcome to the Recipe </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="JavaScript">
	function update(){
		alert('Recipe updated successfully.');
	}
	</script>
<body>
	<div class="wrapper">
		<div class="top">
			<div class="topleft">
				<img src="image/logo.png">
			</div>
			<div class="topright">
				<img src="image/aa.png">
			</div>
		</div>
		<div class="navigation">
			<ul>
				<li><a href="home_page.php"> Home </a></li>
				<li><a href="my_recipe.php" class="active"> My Recipes </a></li>
				<li><a href="add_recipe.php"> Add Recipes </a></li>
				<li><a href="logout.php"> Log Out </a></li>
			</ul>
		</div>
		<div class="foodright">
			<fieldset style="border-color:#f1d969;"> 
				<legend> Food Information</legend>
				<form action="update_action.php" method="post">
					<table>
						<tr>
							<td><label>Item ID: </label></td>
							<td><input type="text" name="id" value="<?php echo $data['id'];?>"></td>
						</tr>
						<tr>
							<td><label>Title:</label></td>
							<td><input type="text" name="title" value="<?php echo $data['title'];?>"/></td>
						</tr>
						<tr>
							<td><label>Ingredients:</label></td>
							<td><input type="text" name="ingredients" value="<?php echo $data['ingredients'];?>"></td>
						</tr>
						<tr>
							<td valign="top"><label>Time Required: </label></td>
							<td><input type="text" name="time" value="<?php echo $data['time'];?>"></td>
						</tr>
						<tr>
							<td valign="top"><label>Steps: </label></td>
							<td><textarea cols="19" rows="16" name="steps"><?php echo $data['steps'];?></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td align="center"><br><input type="submit" value="Update" onclick="update();"></td>
						</tr>
					</table>
				</form>
			</fieldset>
		</div>
		<br clear="all">
		<div class="footer">
			<p>Copyright 2014 The Recipe  |  Art and Design by Sangeeta <a href="http://www.twitter.com"><img src="image/twitter.png" alt="twitter" id="twitter"/></a>
				<a href="http://www.facebook.com"><img src="image/fb.png" alt="facebook" id="facebook"/></a> </p>
			</div>
		</div>
	</body>
	</html>


