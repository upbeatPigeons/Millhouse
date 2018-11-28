<?php 

class RegisterDataSetup 
{
  private $register_username;
  private $register_password;
  
  public function __construct($register_username, $register_password) 
  {
    $this->register_username = $register_username;
    $this->register_password = $register_password;
  }

  public function get_username()
  {
    return $this->register_username;
  }

  public function get_password() 
  {
    //Hashing the register_password immiditaly
    return password_hash($this->register_password, PASSWORD_DEFAULT);  
  }

}
  
