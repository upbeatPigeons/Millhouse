<?php
//session_start();
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
    $statement = $this->pdo->prepare("INSERT INTO comments(content, date) VALUES (:content, :date)");
  	$statement->execute ([
      ":content" => $new_comment->get_comment(),
      //":created_by" => $_SESSION["id"],
      ":date"=> $new_comment->get_date()
  	]);
  }

  public function list_all_comments()
  {
   /*      try {
      $statement = $this->pdo->prepare("SELECT * from comments ORDER BY date DESC LIMIT 1");
      $statement->execute();
      // return a single post object 
      $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Comment");
      return $statement->fetch();
    } catch (PDOException $exception) {
      echo "Connection error" . $exception->getMessage();
    } */
  }

  public function delete_posts($post_id) 
  {

  }

}
