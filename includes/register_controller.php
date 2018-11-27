<?php
session_start();

require_once ("database_connection.php");
require_once ("../classes/Register.php");

/* register_controller is the "central" for Register and here is were al the functions in Register are initialized and the instances of both classes RegisterDataSetup and Register are initalized. Register_controller also contains error-handling and $_POST Globals */

$register_username = $_POST['username'];
$register_password = $_POST['password']; 

$registration_steps = new Register($pdo);
/* ***Error handling */

//If the provided password is shorter than 6 chars - display error.
if (strlen($register_password) <= 6)
{
  //TODO: some sort of error handling
  die("Choose a password longer then 6 character");
}

//Create an instance with the data from the form
$new_user = new RegisterDataSetup($register_username, $register_password);
//Check if register_username is avalible with the new instance of user

$row = $registration_steps->check_for_user_in_database($new_user);

if ($row['num'] > 0) 
{
  //TODO: some sort of error handling
  die("user taken");
} 
else 
{
  //If register_Username is not taken, go ahead and actually register
  
  $registration_steps->register_user($new_user);

  //The varification is happening afterthe user is actually added
  print_r("thank you for registering");

  //Redirect, or idk what's supposed to happen here. It's commented for develop reasons
  //header('Location: ../index.php');
}






