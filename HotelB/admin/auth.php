<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");

//select a database to work 
$db = "lodge_db";
$selected = mysqli_select_db($dbhandle, $db)
  or die("Could not select database");


?>