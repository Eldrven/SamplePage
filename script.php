<?php
$email_to = "#";
$error=false;
$name = $_POST["name"];
$email_from = "test@acme.com";
$email = $_POST["email"];
$message = $_POST["message"];
$email_subject = "Form submission from website";
$headers = "From: " . $email_from . "\n";
$headers .= "Reply-To: " . $email . "\n";

$message = "Name: ". $name . "\r\nMessage: " . $message;

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo $emailErr = 'Invalid email format  <br> <a href="/">Back to main page</a>';
    $error=true;
  }


if(!$error){

    $sent = mail($email_to, $email_subject, $message, $headers, "-f" .$email_from);
    if ($sent)
{
header("Location: /");
} else {
echo 'Oops! Something went wrong. Please try again later. <br> <a href="/">Back to main page</a>';
}
}



?>