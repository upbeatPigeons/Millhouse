<?php 

/*
* Validates the form submissions and sends the email if there are no errors
* Is used on about_page.php
*/

if ($_GET["action"] === "send") {

  $name = htmlspecialchars(stripslashes(trim($_POST["name"])));
  $email = htmlspecialchars(stripslashes(trim($_POST["email"])));
  $subject = htmlspecialchars(stripslashes(trim($_POST["subject"])));
  $message = htmlspecialchars(stripslashes(trim($_POST["message"])));

  // Validations below

  // Name validation: Cannot be empty and cannot contain invalid characters
  if(!preg_match("/^[A-Za-z .'-]+$/", $name)) {
    $name_error = "Invalid name";
  }

  // Subject validation: Cannot be empty and cannot contain invalid characters
  if(!preg_match("/^[A-Za-z0-9 .'-\?]+$/", $subject)) {
    $subject_error = "Invalid subject";
  }

  // Email validation: Cannot be empty and cannot contain invalid characters
  if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
    $email_error = "Invalid email";
  }

  // Message validation: Cannot be empty
  if(strlen($message) === 0){
    $message_error = "Your message cannot be empty";
  }

  // If there are no errors, send the email
  if(!isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)) {
    $body="From: $name \n Message: $message";
    $recipient = "millhouse@millhousecompany.com";

    if (mail($recipient, $subject, $body)) {
      header("Location: ../views/about_page.php?email_sent=true");
    } else {
      header("Location: ../views/about_page.php?email_sent=false");
    }
  }
}

?>