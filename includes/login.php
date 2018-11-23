<?php include('database_functions.php');

$username = $_POST["username"];
$password = $_POST["password"];

$fetched_user = fetch_user_from_db($username);


$is_password_correct = password_verify($password,$fetched_user["password"]);

if($is_password_correct){

  //Save user globally to session
  $_SESSION["username"] = $fetched_user["username"];
  $_SESSION["id"] = $fetched_user["id"];

  header('Location: ../index.php');

}else{
  //Handle errors
  header('Location: ../index.php?error=Wrong_password');
}
