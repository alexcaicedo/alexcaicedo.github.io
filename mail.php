<?php
//Get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "a.caicedo_g@hotmail.com";
$subject = "Mail from website";
$txt = "Name: " . $name . "\r\nEmail: " . $email . "\r\nMessage: " . $message;
$headers = "From: noreply@yoursite.com";
if($email != NULL){
    mail($to, $subject, $txt, $headers);
}
//re-direct
header("Location:ty.html");
?>