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

  public function list_all_posts()
  {
    $statement = $this->pdo->prepare("SELECT * from posts ORDER BY date DESC");
    $statement->execute();
    // return an array consisting of objects from the Post class using build_post_from_pdo function on each of the rows in the query result set
    return $statement->fetchAll(PDO::FETCH_FUNC, "Post::build_post_from_pdo");
  }

  public function list_single_post($post_id)
  {
    $statement = $this->pdo->prepare("SELECT * from posts WHERE user_id = :user_id ORDER BY date DESC");
    // execute and return as list of Post objects
  }

  public function delete_posts($post_id) 
  {
    $statement = $this->pdo->prepare("DELETE from posts WHERE id = :id");
    // execute 
  }

}

?>


