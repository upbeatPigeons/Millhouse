<?php 
if (isset($_POST["submit"])) {

  $name = htmlspecialchars(stripslashes(trim($_POST["name"])));
  $email = htmlspecialchars(stripslashes(trim($_POST["email"])));
  $subject = htmlspecialchars(stripslashes(trim($_POST["subject"])));
  $message = htmlspecialchars(stripslashes(trim($_POST["message"])));

  if(!preg_match("/^[A-Za-z .'-]+$/", $name)) {
    $name_error = 'Invalid name';
  }
  if(!preg_match("/^[A-Za-z .'-]+$/", $subject)) {
    $subject_error = 'Invalid subject';
  }
  if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
    $email_error = 'Invalid email';
  }
  if(strlen($message) === 0){
    $message_error = 'Your message should not be empty';
  }
}

if(isset($_POST["submit"]) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)) {
  $formcontent="From: $name \n Message: $message";
  // Change recipient to company email address later
  $recipient = "idaelisabethb@gmail.com";
  //$mailheader = "From: $email \r\n";
  if (mail($recipient, $subject, $formcontent)) {
    header("Location: ../views/about_page.php");
  } else {
    header("Location: ../views/about_page.php");
  }
}

?>