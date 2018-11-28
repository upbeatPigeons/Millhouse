<?php
require_once ('CommentDataSetup.php');


class Comment {
  private $pdo;

  /* Inject the pdo connection so it is available inside of the class
   * so we can call it with '$this->pdo', always available inside of the class
   */
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }
  public function create_comment(CommentDataSetup $new_comment) {
    $statement = $this->pdo->prepare("INSERT blhaha")
  }

}