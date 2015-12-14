<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "catcher";
$conn = null;



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
    echo utf8_encode($conn);



} catch (PDOException $e) {
    echo $e->getMessage();
}


?>
