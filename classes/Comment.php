<?php

class Comment
{

  private $comment_content;
  private $date;


  public function set_comment($comment_content) {
		$this->comment_content = $comment_content;
  }
  

  public function get_comment() 
  {
		return $this->comment_content;
  }
  
  public function get_date()
  {
    return $this->date = date("Y-m-d");
  }
}