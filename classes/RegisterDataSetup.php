<?php 

class RegisterDataSetup 
{
  private $username;
  private $password;
  
  public function __construct($username, $password) 
  {
    $this->username = $username;
    $this->password = $password;
  }

  public function get_username()
  {
    return $this->username;
  }

  public function get_password() 
  {
    //Hashing the password immiditaly
    return password_hash($this->password, PASSWORD_DEFAULT);  
  }

}
  
