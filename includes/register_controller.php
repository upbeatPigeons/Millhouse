<?php
session_start();

require_once ("database_connection.php");
require_once ("../classes/DatabaseFunctions.php"); 

/* register_controller is the "central" for Register and here is were al the functions in Register are initialized and the instances of both classes RegisterDataSetup and Register are initalized. Register_controller also contains error-handling and $_POST Globals */

$register_username = $_POST['username'];
$register_password = $_POST['password']; 

$registration_steps = new UserMethods($pdo);


// Error handling below

//If the provided password is shorter than 6 chars - display error.
if (strlen($register_password) <= 6)
{
  header("Location: ../views/login_page.php?password_too_short=Password_must_be_longer_than_6_characters");
}

//Create an instance with the data from the form
$new_user = new Register($register_username, $register_password);

//Check if register_username is available with the new instance of user
$row = $registration_steps->check_for_user_in_database($new_user);

if ($row['num'] > 0) 
{
  header("Location ../views/login_page?user_taken=User_is_already_taken");
} else {
  //If the username is not taken, go ahead and register the user
  $registration_steps->register_user($new_user);
  header("Location: ../views/login_page.php?user_registered=User_succesfully_registered");
}






