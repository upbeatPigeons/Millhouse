<?php 
class Setup_register 
{
  private $username;
  private $password;

  public function __construct($username, $password) 
  {
    $this->username = $username;
    $this->password = $password;
  }

  public function get_username($username)
  {
    return $this->username = $usernname;
  }

    public function get_password($password) 
  {
    return $this->password = $password;
  }
}
