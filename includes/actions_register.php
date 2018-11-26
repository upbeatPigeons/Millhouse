<?php
session_start();

require_once ("../classes/Register.php");
require_once ("../classes/Register_access.php");
require_once ("database_connection.php");

/*
* Controller file and $_POST Globals
*/

$username = $_POST['username'];
$password = $_POST['password']; 

/* ***Error handling */

//If the provided password is shorter than 6 chars - display error.
$password = $_POST['password']; 
if (strlen($password) <= 6)
{
  //TODO: some sort of error handling
  die("Choose a password longer then 6 character");
}