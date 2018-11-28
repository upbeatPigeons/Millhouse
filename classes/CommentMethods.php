<?php
require_once ('Comment.php');


class CommentMethods {
  private $pdo;

  /* Inject the pdo connection so it is available inside of the class
   * so we can call it with '$this->pdo', always available inside of the class
   */
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }
  public function create_comment(Comment $new_comment) {
    $statement = $this->pdo->prepare("INSERT INTO comments (content) VALUES (:content)");
  	$statement->execute ([
  		":content" => $new_comment->get_comment(),
  	]);
  }

}