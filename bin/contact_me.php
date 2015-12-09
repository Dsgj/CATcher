<?php
// check if fields passed are empty
if(empty($_POST['email'])  		||
    empty($_POST['ident'])  		||
    empty($_POST['name'])  		||
    empty($_POST['breed']) 		||
    empty($_POST['address']) 		||
    empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$email_address = $_POST['email'];
$ident= $_POST['ident'];
$name= $_POST['name'];
$breed = $_POST['breed'];
$address = $_POST['address'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'leoozolinscarlson@gmail.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Catcher Register form  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details:\n\nCat name: $name\n\nCatID: $ident\n\nAddress: $address\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@your-domain.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>