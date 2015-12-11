<?php
include 'connect.php';

$email_address = $_POST["email"];
$ident = $_POST["ident"];
$name = $_POST["name"];
$sex = $_POST["sex"];
$breed = $_POST["breed"];
$address = $_POST["address"];
$lat = $_POST["lat"];
$lng = $_POST["lng"];
$info = $_POST["info"];

$sql = "
        INSERT INTO cats(email,ident,name,sex,breed,address,lat,lng,info)
		VALUES('" . $email_address . "','" . $ident . "','" . $name . "','" . $sex . "','" . $breed . "','" . $address . "','" . $lat . "','" . $lng . "','" . $info . "')
		";

$conn->exec($sql);
?>