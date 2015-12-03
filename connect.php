<?php
$username = "root";
$password = "root";
$hostname = "127.0.0.1"; 
$port = "3306";

//connection to the database
$dbhandle = mysql_connect($hostname. ':' .$port, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
?>
