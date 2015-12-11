<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "catcher";

$email_address = "leoozolinscarlson@gmail.com";
$ident = "123123";
$name = "lucifer";
$sex = "dumfreppe";
$address = "inte hemma";
$info = "lite text";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";


    $sql = "
        INSERT INTO cats( email,idcats,name,sex,address,info)
		VALUES('" . $email_address . "','" . $ident . "','" . $name . "','" . $sex . "','" . $address . "','" . $info . "')
		";

    $conn->exec($sql);
    echo "New record created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
