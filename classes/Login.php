<?php 

class Login
{
  private $login_username;
  private $login_password;

  public function __construct($login_username, $login_password) 
  {
    $this->login_username = $login_username;
    $this->login_password = $login_password;
  }

  public function get_username()
  {
    return $this->login_username;
  }

  public function get_hashed_password() 
  {
    return $this->login_password;  
  }
}