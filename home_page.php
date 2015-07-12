<?php include 'ctrl/MembersCtrl.php';?>
<html>
<head>
	<title> Welcome to Gohealth-e </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
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

		<h2>Information:</h2>
		<h3>
		1. What is Gohealth-e ?</h3>
<h3>A: started with a desire to take an experience people love and make it better. To make it even simpler, more useful, and more enjoyable</h3>

<h3>2. How is Gohealth-e helpful ?</h3>
<h3>A. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h3>

<h3>4. How to make sure an appointment is made ?</h3>
<h3>A. started with a desire to take an experience people love and make it better. To make it even simpler, more useful, and more enjoyable</h3>

<h3>5. Are there any other alternatives ?</h3>
<h3>A. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h3>


		<?php

		/*//geting value to select the rows of tabel
				$page=0;
		if(!empty($_GET['page']))
		{
			$page=($_GET['page']-1)*2;//2 will multipy to select particular row
		}

		$query = "select * from detail LIMIT ".$page.",2";
		$res = mysql_query($query);
		while ($data=mysql_fetch_array($res)){
			?>
				<div class="center">
					<h3><?php echo $data['title'];?></h3>					
					<p><b>Ingredients:</b><?php echo $data['ingredients'];?></p>
					<p><b>Time required:</b><?php echo $data['time'];?></p>
					<p><b>Steps:</b><?php echo $data['steps'];?></p>
				</div>
			<?php } ?>
			<?php
				//Pagination Start 
			$res=mysql_query("select * from detail");
			$page_number=mysql_num_rows($res);
			$count_page=$page_number/2;
			for($i=0;$i<$count_page;$i++)
			{
				?>
				<a href="home_page.php?page=<?php echo ($i+1); ?>"><?php echo ($i+1); ?></a>
				<?php
			}
			
			//Pagination End
			*/
			?>
			<br clear="all">
			<div class="footer">
				<p>Copyright 2015 Gohealth-e  |  Art and Design by Sangeeta <a href="http://www.twitter.com"><img src="image/twitter.png" alt="twitter" id="twitter"/></a>
					<a href="http://www.facebook.com"><img src="image/fb.png" alt="facebook" id="facebook"/></a> </p>
				</div>
			</div></div>
		</body>
		</html>