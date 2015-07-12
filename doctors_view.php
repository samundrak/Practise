<html>
<head>
	<title> Welcome to Gohealth-e </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	include('connect.php');
	?>
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
				<li><a href="home_page.php" class="active"> Home </a></li>
				<li><a href="my_recipe.php">  About Us </a></li>
				<li><a href="add_recipe.php"> Appointment </a></li>
				<li><a href="logout.php"> Logout </a></li>
			</ul>
		</div>

		<div class="search"><form action="search_recipes.php" method="get">
			
			<p><label><input type="text" name="ing" placeholder="search" /></label> &nbsp
					  <input type="submit" value="search" /></p>

		</form></div>

		<h2>List of patients:</h2>
		<?php

		//geting value to select the rows of table
				$page=0;
		if(!empty($_GET['page']))
		{
			$page=($_GET['page']-1)*2;//2 will multipy to select particular row
		}

		$query = "select * from patient_info LIMIT ".$page.",2";
		$res = mysql_query($query);
		while ($data=mysql_fetch_array($res)){
			?>
				<div class="center">
					<p><b>Name: </b><?php echo $data['name'];?></h3>					
					<p><b>Address: </b><?php echo $data['address'];?></p>
					<p><b>Age: </b><?php echo $data['age'];?></p>
					<p><b>Gender: </b><?php echo $data['gender'];?></p>
					<p><b>Phone: </b><?php echo $data['phone'];?></p>
				</div>
			<?php } ?>
			<?php
				//Pagination Start 
			$res=mysql_query("select * from patient_info");
			$page_number=mysql_num_rows($res);
			$count_page=$page_number/2;
			for($i=0;$i<$count_page;$i++)
			{
				?>
				<a href="doctors_view.php?page=<?php echo ($i+1); ?>"><?php echo ($i+1); ?></a>
				<?php
			}			
			//Pagination End
			?>
			<br clear="all">
			<div class="footer">
				<p>Copyright 2015 Gohealth-e  |  Art and Design by Sangeeta <a href="http://www.twitter.com"><img src="image/twitter.png" alt="twitter" id="twitter"/></a>
					<a href="http://www.facebook.com"><img src="image/fb.png" alt="facebook" id="facebook"/></a> </p>
				</div>
			</div></div>
		</body>
		</html>