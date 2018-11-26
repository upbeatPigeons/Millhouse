<?php
session_start();

require_once ("database_connection.php");
require_once ("../classes/RegisterDataSetup.php");
require_once ("../classes/Register.php");

/*
* Controller file and $_POST Globals
*/

$register_username = $_POST['username'];
$register_password = $_POST['password']; 

$registration_steps = new Register($pdo);
/* ***Error handling */

//If the provided register_password is shorter than 6 chars - display error.
if (strlen($register_password) <= 6)
{
  //TODO: some sort of error handling
  die("Choose a register_password longer then 6 character");
}

//Create an instance with the data from the form
$new_user = new RegisterDataSetup($register_username, $register_password);
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
}




