<?php
require_once ('Register.php');

class Register
{
  private $pdo;
  private $sql;
  private $hashed_password;
  /* Inject the pdo connection so it is available inside of the class
   * so we can call it with '$this->pdo', always available inside of the class
   */
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }
  
  public function check_for_user_in_database($username)
  { 
    //Construct the SQL statement and prepare it.
    $sql = "SELECT COUNT(username) AS num FROM users WHERE username = :username";
    $statement = $this->pdo->prepare($sql);
    //Bind the provided username to our prepared statement.
    $statement->bindValue(':username', $username);
    //Execute.
    $statement->execute();
    //Fetch the row.  
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    //If the provided username already exists - display error.
    if ($row['num'] > 0) 
    {
      //TODO: some sort of error handling
      die("user taken");
    } 
  }

  public function set_hashed_password($hashed_password) 
  {
    password_hash($password, PASSWORD_DEFAULT);
  }

  public function register_user(Register $new_user) 
  {
    //Prepare our INSERT statement.
    //Remember: We are inserting a new row into our users table.
    $sql = "INSERT INTO users(username, password) VALUES (:username, :password)";
    $statement = $pdo->prepare($sql);

    //FIXME: remove these two lines
    //need this for execute statment
    //$username = $_POST['username'];
    //Bind our variables.
    $statement->execute(
      [
      ":username" => $username,
      ":password" => $hashed_password
      ]
    );
  }

  public function redirect_registered_user() 
  {
    //Execute the statement and insert the new account.
    $result = $statement->execute();
    //If the signup process is successful.
    if ($result) {
      //It's redirecting to this page temp so query won't inserting twice to database
      //TODO: A thank you message
      header('Location: ../views/single_post_page.php');
    }
  }
}