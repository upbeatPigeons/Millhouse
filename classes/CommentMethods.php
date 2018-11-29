<?php
session_start();
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
  
  public function create_comment(Comment $new_comment) 
  {
    //Use a _$GET to access the correct post.id 
    $statement = $this->pdo->prepare("INSERT INTO comments (content, post_id, created_by) SELECT :content, posts.id, :created_by FROM posts WHERE posts.id = 4");
  	$statement->execute ([
      ":content" => $new_comment->get_comment(),
      ":created_by" => $_SESSION["id"]
  	]);
  }

  public function list_all_comments()
  {

  }

  public function delete_posts($post_id) 
  {

  }

}
