<?php

class Comment
{
 
  private $comment_content;


  public function __construct($comment_content)
  {
    $this->comment_content = $comment_content;
  }
  
  public function get_comment() 
  {
		return $this->comment_content;
	}

/* and date stuff */
}