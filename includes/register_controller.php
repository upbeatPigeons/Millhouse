<?php
session_start();

require_once ("database_connection.php");
require_once ("../classes/UserMethods.php"); 

/* Register_controller is the "central" for Register
* Here is where all the functions in Register are initialized and the instances of both classes RegisterDataSetup and Register are initalized. 
* Register_controller also contains error-handling and $_POST Globals 
*/

$register_username = $_POST["username"];
$register_password = $_POST["password"]; 
$confirm_password = $_POST["confirm_password"];

$registration_steps = new UserMethods($pdo);

/* 
* Error handling below
* In order to show more error messages at once, we will declare an aggregator called $validation_vars
* This aggregator will start with no errors to show and will concatenate the errors messages when a validation fails
* These error messages will print under the field(s) it regards using $_GET
*/

$validation_vars = "";

// Validate password length

if (strlen($register_password) <= 6) {
  $validation_vars = $validation_vars . "password_error=Password_must_be_longer_than_6_characters&";
} 

// Validate if password matches 

if ($register_password != $confirm_password) {
  $validation_vars = $validation_vars . "confirm_password_error=Passwords_do_not_match&";
} 
  
// Validate if user is already taken

//Create an instance with the data from the form
$new_user = new Register($register_username, $register_password);

//Check if register_username is available with the new instance of user
$row = $registration_steps->check_for_user_in_database($new_user);

if ($row["num"] > 0) {
  $validation_vars = $validation_vars . "username_error=Username_is_taken&";
}

// If the user passes the validations, go ahead and register 

if (empty($validation_vars)) {
  $registration_steps->register_user($new_user);
  header("Location: ../index.php?user_registered=User_succesfully_registered%2E_You_can_now_log_in%2E&action=login");
} else {
  header("Location: ../views/login_page.php?" . $validation_vars);
}








