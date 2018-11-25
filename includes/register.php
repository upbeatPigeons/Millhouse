<?php
require ('database_connection.php');

//If the POST var "register" exists (our submit button), then we can
//assume that the user has submitted the registration form.
if (isset($_POST['register'])) {

  //Retrieve the field values from our registration form.
  $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
  $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;

  //Construct the SQL statement and prepare it.
  $sql = "SELECT COUNT(username) AS num FROM users WHERE username = :username";
  $statement = $pdo->prepare($sql);
  //Bind the provided username to our prepared statement.
  $statement->bindValue(':username', $username);
  //Execute.
  $statement->execute();

  //Fetch the row.  
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  //If the provided username already exists - display error.
  if ($row['num'] > 0) {
    //TODO: some sort of error handling
    die("user taken");
  } 
  
  //If the provided password is shorter than 6 chars - display error.
  $password = $_POST['password']; 
  if (strlen($password) <= 6){
    //TODO: some sort of error handling
    die("Choose a password longer then 6 character");
  }

  //Hash the password as we do NOT want to store our passwords in plain text.
  //$passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));
  $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

  //Prepare our INSERT statement.
  //Remember: We are inserting a new row into our users table.
  $sql = "INSERT INTO users(username, password) VALUES (:username, :password)";
  $statement = $pdo->prepare($sql);

  //need this for execute statment
  $username = $_POST['username'];
  //Bind our variables.
  $statement->execute(
    [
    ":username" => $username,
    ":password" => $hashed_password
    ]
    );

  //Execute the statement and insert the new account.
  $result = $statement->execute();
  //If the signup process is successful.
  if ($result) {
    //It's redirecting to this page temp so query won't inserting twice to database
    //TODO: A thank you message
    header('Location: ../views/single_post_page.php');
    
  }
  exit();
}
