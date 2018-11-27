<?php
session_start();

require_once ("database_connection.php");
require_once ("../classes/RegisterDataSetup.php");
require_once ("../classes/Register.php");

/*
* Controller file and $_POST Globals
*/

$username = $_POST['username'];
$password = $_POST['password']; 

$registration_steps = new Register($pdo);
/* ***Error handling */

//If the provided password is shorter than 6 chars - display error.
if (strlen($password) <= 6)
{
  //TODO: some sort of error handling
  die("Choose a password longer then 6 character");
}

//Create an instance with the data from the form
$new_user = new RegisterDataSetup($username, $password);
//Check if username is avalible with the new instance of user
$registration_steps->check_for_user_in_database($new_user);

if ($row['num'] > 0) 
{
  //TODO: some sort of error handling
  die("user taken");
} 
else 
{
  //If Username is not taken, go ahead and actually register
  print_r("thank you for registering");
  $registration_steps->register_user($new_user);

  //Redirect, or idk what's supposed to happen here
  header('Location: ../index.php');
}






