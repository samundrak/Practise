<html>
<head>
	<title> Welcome to the Recipe </title>
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
				<li><a href="my_recipe.php"> About us </a></li>
				<li><a href="add_recipe.php"> Appointment </a></li>
				<li><a href="logout.php"> Log Out </a></li>
			</ul>
		</div>

		<div class="search"><form action="search_recipes.php" method="get">
			<p><label><input type="text" name="ing" placeholder="search recipe" /></label> &nbsp<input type="submit" value="search" /></p>
		</form></div>

		<h2>Information searched for:</h2>
		<?php

		//geting value to select the rows of tabel
				$page=0;
		if(!empty($_GET['page']))
		{
			$page=($_GET['page']-1)*2;//2 will multipy to select particular row
		}

		 
		$ing = $_GET['ing'];
		
		$query = "select * from detail where ingredients like '%$ing%' LIMIT ".$page.",2";
			$res = mysql_query($query);
		while ($data=mysql_fetch_array($res)){
			?>
							
			<?php } ?>
			<?php
				//Pagination Start 
			//$res=mysql_query("select * from detail");
			$page_number=mysql_num_rows($res);
			$count_page=$page_number/2;
			for($i=0;$i<$count_page;$i++)
			{
				?>
				<a href="search_recipes.php?page=<?php echo ($i+1); ?>&pre=<?php echo $choice ?>&ing=<?php echo $ing; ?>"><?php echo ($i+1); ?></a>
				<?php
			}
			
			//Pagination End
			?>
			<br clear="all">
			<div class="footer">
				<p>Copyright 2014 The Recipe  |  Art and Design by Sangeeta <a href="http://www.twitter.com"><img src="image/twitter.png" alt="twitter" id="twitter"/></a>
					<a href="http://www.facebook.com"><img src="image/fb.png" alt="facebook" id="facebook"/></a> </p>
				</div>
			</div></div>
		</body>
		</html>
		<?php
		