<?php 

session_start();

include('database_functions.php');

$username = $_POST["username"];
$password = $_POST["password"];

$fetched_user = fetch_user_from_db($username,$pdo);

$is_password_correct = password_verify($password,$fetched_user["password"]);

if($is_password_correct){

  //Save user globally to session
  $_SESSION["username"] = $fetched_user["username"];
  $_SESSION["id"] = $fetched_user["id"];
  header('Location: ../views/login_page.php');

}else{
  //Handle errors
  header('Location: ../views/login_page.php?error=Wrong_password');
}
