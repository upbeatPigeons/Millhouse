<?php 
class Register 
{
  private $password;
  private $username;

  public function __construct($password, $username) 
  {
    $this->password = $password;
    $this->username = $username;
  }

  public function get_password($password) 
  {
    return $this->password = $password;
  }
  public function get_username($username)
  {
    return $this->username = $usernname;
  }
}