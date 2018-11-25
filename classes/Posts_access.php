<?php 

require_once "Post.php";

class Access_posts
{
  private $pdo;
  /* Inject the pdo connection so it is available inside of the class
   * so we can call it with '$this->pdo', always available inside of the class
   */
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

   public function create(Post $new_post)
  {    
  	$statement = $this->pdo->prepare("INSERT INTO posts (title, description, image, created_by, date, category) VALUES (:title, :description, :image, :created_by, :date, :category)");
  	$statement->execute ([
  		":title" => $new_post->get_title(),
  		":description" => $new_post->get_description(),
      ":image" => $new_post->get_image(),
  		":created_by" => $new_post->get_created_by(),
  		":date" => $new_post->get_date(),
  		":category" => $new_post->get_category()
  	]);
  }

}

?>


