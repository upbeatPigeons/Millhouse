<?php 

require_once ('database_connection.php');
require_once ('Login.php');
require_once ('Register.php');

class UserMethods
{
  private $pdo;

  // PDO object gets passed as a parameter to encapsulate the database operations for Login inside this class
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  // Fetches the user from the database
  public function fetch_user_from_db(Login $log_user)
  {
    $statement = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");
    
    $statement->execute(
      [
        ":username" => $log_user->get_username()
      ]
    );
  
    return $statement->fetch(PDO::FETCH_ASSOC);
  }

  // Checks if the user exists in the database 
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
    //Return the row, to be able to check if the username is taken
    return $statement->fetch(PDO::FETCH_ASSOC);  

  }

  // Registers the user in the database 
  public function register_user(Register $new_user) 
  {
    //Prepare our INSERT statement.
    //Remember: We are inserting a new row into our users table.
    $statement = $this->pdo->prepare(
      "INSERT INTO users(username, password, admin) VALUES (:username, :password, :admin)"
    );
    //Bind our variables.
    $statement->execute([
      ":username" => $new_user->get_username(),
      ":password" => $new_user->get_password(),
      ":admin" => 0
    ]);   
  }
}