<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];

if (!empty($email) && !empty($message)) {
  if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $receiver = "Meiroudii@proton.me";
    $subject = "From: $name <$email>";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\nMessage: $message\n\nSincerely,\n$name"; 
    $sender = "From: $email";

    if(mail($receiver, $subject, $body, $sender)){ // mail() built in in php 
      echo "Your message has been sent!";
    } else {
      echo "Your message cannot be send.";
    }

  } else {
    echo "Enter a valid email address.";
  }

}else {
  print("Email and message field is required!");
}
?>
