<?php

class CommentDataSetup 
{
  private $id;
  private $content;
  private $postId;
  private $createdBy;
  private $date;

  public function __construct($id, $content, $postId, $createdBy, $date)
  {
    $this->id = $id;
  }

}