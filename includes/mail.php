<?php 
if ($_GET["action"] === "send") {

  $name = htmlspecialchars(stripslashes(trim($_POST["name"])));
  $email = htmlspecialchars(stripslashes(trim($_POST["email"])));
  $subject = htmlspecialchars(stripslashes(trim($_POST["subject"])));
  $message = htmlspecialchars(stripslashes(trim($_POST["message"])));
  $website = $_POST["website"];

  // Validations below

  if(!preg_match("/^[A-Za-z .'-]+$/", $name)) {
    $name_error = "Invalid name";
  }
  if(!preg_match("/^[A-Za-z .'-]+$/", $subject)) {
    $subject_error = "Invalid subject";
  }
  if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
    $email_error = "Invalid email";
  }
  if(strlen($message) === 0){
    $message_error = "Your message cannot be empty";
  }

  // If there are no errors, send the email

  if(!isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)) {
    $body="From: $name \n Message: $message";
  // Change recipient to company email address later
    $recipient = "idaelisabethb@gmail.com";
  //$mailheader = "From: $email \r\n";
    if (mail($recipient, $subject, $body)) {
      header("Location: ../views/about_page.php?emailSent=true");
    } else {
      header("Location: ../views/about_page.php?emailSent=false");
    }
  }
}

?>