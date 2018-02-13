<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$formcontent="From: $name \n Message: $message";
$recipient = "swapnilpol51@gmail.com,niranjan.v.kshirsagar@gmail.com";
//$subject = "$_POST['subject']";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or 
die("Error!");
echo "Thank You!";
//header("Location: http://www.crystalcanvas.co.in/");
//exit();
?>