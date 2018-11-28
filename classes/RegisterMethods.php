<?php

require_once ('RegisterDataSetup.php');

class Register
{
  private $pdo;

  /* Inject the pdo connection so it is available inside of the class
   * so we can call it with '$this->pdo', always available inside of the class
   */
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }
  
  public function check_for_user_in_database(RegisterDataSetup $new_user)
  {  
    //Construct the SQL statement and prepare it.
    $statement = $this->pdo->prepare(
      "SELECT COUNT(username) AS num FROM users WHERE username = :username"
    );
    //Bind and execute the provided username to our prepared statement.
    $statement->execute ([
  		":username" => $new_user->get_username(),
    ]);
    //Return the row, to be able to check if it's taken
    return $statement->fetch(PDO::FETCH_ASSOC);  

  }

  public function register_user(RegisterDataSetup $new_user) 
  {
    //Prepare our INSERT statement.
    //Remember: We are inserting a new row into our users table.
    $statement = $this->pdo->prepare(
      "INSERT INTO users(username, password) VALUES (:username, :password)"
    );
    //Bind our variables.
    $statement->execute([
      ":username" => $new_user->get_username(),
      ":password" => $new_user->get_password()
    ]);   
  }

}