<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "catcher";
$conn = null;

mysql_query("SET NAMES 'utf8'")

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    mysql_set_charset('utf8',$conn);
    echo "Connected successfully";



} catch (PDOException $e) {
    echo $e->getMessage();
}


?>
