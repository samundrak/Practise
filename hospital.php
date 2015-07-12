<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "gohealthe";
$thing = $_GET["a"];

$connection  = mysql_connect($host, $user, $pass) 
or die ("Couldn't connect to database");  
mysql_select_db ($database);
$query = "SELECT * from doctor_info where hospitalid='$thing'";
$ret = mysql_query ($query, $connection);
if (!$ret) {
  echo "<p>Something went wrong: " . mysql_error(); + "</p>";
}
$num_results = mysql_num_rows ($ret);
if ($num_results == 0) {
  echo "<p>No such entry</p>";
}
else {
  while ($row = mysql_fetch_array ($ret)){
    
    echo "<select>";
    echo "<option>" . $row['doctorname'] . "</option>";
    echo "</select>";
  }
  mysql_close($connection);
}
?> 