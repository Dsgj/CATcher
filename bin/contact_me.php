<?php
include 'connect.php';
// check if fields passed are empty
/*
if (empty($_POST['email']) ||
    empty($_POST['ident']) ||
    empty($_POST['name']) ||
    empty($_POST['breed']) ||
    empty($_POST['address']) ||
    empty($_POST['message']) ||
    !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
) {
    echo "No arguments Provided!";
    return false;
}

$email_address = $_POST['email'];
$ident = $_POST['ident'];
$name = $_POST['name'];
$breed = $_POST['breed'];
$address = $_POST['address'];
$message = $_POST['message'];
*/
// create email body and send it
$email_address = "leoozolinscarlson@gmail.com";
$ident = "123123";
$name = "lucifer";
$sex ="dumfreppe";
$address = "inte hemma";
$info = "lite text";

$sql = "
		INSERT INTO cats( email,idcats,name,sex,address,info)
		VALUES('" . $email_address . "','" . $ident . "','" . $name . "','" . $sex . "','" . $address . "','" . $info ."')
	";

$result = mysql_query( $sql );

if ( $result ) {
    return true;
} else {
    return false;
}

mysql_close();
?>