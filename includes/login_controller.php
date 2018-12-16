<?php
session_start();

require_once ("database_connection.php");
require_once ("../classes/DatabaseFunctions.php");

/*
* Controller file that retrieves the user from the database, checks if the password matches and saves the user to the session
*/

$login_username = $_POST["username"];
$login_password = $_POST["password"];

$login_methods = new UserMethods($pdo);
$log_user = new Login($login_username, $login_password);

$fetched_user = $login_methods->fetch_user_from_db($log_user);


$is_password_correct = password_verify($login_password, $fetched_user["password"]);

if($is_password_correct){

  //Save user globally to session
  $_SESSION["username"] = $fetched_user["username"];
  $_SESSION["id"] = $fetched_user["id"];
  $_SESSION["admin"] = $fetched_user["admin"];
  header('Location: ../views/home_page.php');

}else{
  //Handle errors
  header("Location: ../views/login_page.php?action=login&error=Wrong_password");
}
