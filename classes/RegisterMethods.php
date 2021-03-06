<?php

require_once ('Register.php');
//Register uses the incoming data from Class RegisterDataSetup and is controlled by register_controller

class RegisterMethods
{
  private $pdo;

  // PDO object gets passed as a parameter to encapsulate the database operations for Register inside this class
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }
  
  // Checks for the user in the database
  public function check_for_user_in_database(Register $new_user)
  {  
    //Construct the SQL statement and prepare it.
    $statement = $this->pdo->prepare(
      "SELECT COUNT(username) AS num FROM users WHERE username = :username"
    );
    //Bind and execute the provided username to our prepared statement.
    $statement->execute ([
  		":username" => $new_user->get_username(),
    ]);

    //Return the row, to be able to check if the usrname is taken
    return $statement->fetch(PDO::FETCH_ASSOC);  

  }

  // Registers the user 
  public function register_user(Register $new_user) 
  {
    //Prepare our INSERT statement.
    //Remember: We are inserting a new row into our users table.
    $statement = $this->pdo->prepare(
      "INSERT INTO users(username, password, admin) VALUES (:username, :password, admin = 0)"
    );
    //Bind our variables.
    $statement->execute([
      ":username" => $new_user->get_username(),
      ":password" => $new_user->get_password()
    ]);   
  }
}