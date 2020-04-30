<?php
$username = "root";
$password = "";
$hostname = "localhost";
$db = "lodge_db";

//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password)
 or die(mysqli_error($dbhandle));

//select a database to work

$selected = mysqli_select_db($dbhandle, $db)
  or die(mysqli_error($dbhandle));


?>