<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "catcher";

$email_address = $_POST["email"];
$ident = $_POST["ident"];
$name = $_POST["name"];
$sex = $_POST["sex"];
$breed = $_POST["breed"];
$address = $_POST["address"];
$lat = $_POST["lat"];
$lng = $_POST["lng"];
$info = $_POST["info"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";


    $sql = "
        INSERT INTO cats(email,ident,name,sex,breed,address,lat,lng,info)
		VALUES('" . $email_address . "','" . $ident . "','" . $name . "','" . $sex . "','" . $breed . "','" . $address . "','" . $lat . "','" . $lng . "','" . $info . "')
		";

    $conn->exec($sql);
    echo "New record created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
