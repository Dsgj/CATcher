<?php
$username = "jesgla-2";
$password = "uvy3Urj1uvy3Urj1";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
?>
