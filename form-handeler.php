<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'info@onurbar.com';
$email_subject = 'New Form Submission'
$email_body = "User Name: $name.\".
"User Email: $visitor_email.\".
"User Message: $message.\".


$to = 'saadamin612@gmail.com';
$headers = "From: $email_from \r\n";
$headers = "Reply-To:$visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location:contact.html")
?>