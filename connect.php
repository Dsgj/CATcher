<?php
$servername = "130.240.170.52";
$username = "root";
$password = "root";
$dbname = "catcher";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
