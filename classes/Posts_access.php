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
    try {
    $statement = $this->pdo->prepare("SELECT * from posts ORDER BY date DESC");
    $statement->execute();
    // return an array consisting of objects from the Post class using FETCH_CLASS
    return $statement->fetchAll(PDO::FETCH_CLASS, "Post");
   } catch (PDOException $exception) {
    echo "Connection error" . $exception->getMessage();
   }
  }


  public function list_single_post($id)
  {
    try {
      $statement = $this->pdo->prepare("SELECT * from posts WHERE id = :id ORDER BY date DESC");
      $statement->execute([
        ":id" => $id
      ]);
      // return a single post object. 
      $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Post");
      return $statement->fetch();
    } catch (PDOException $exception) {
      echo "Connection error" . $exception->getMessage();
    }
  } 

  public function list_latest_post()
  {
    try {
      $statement = $this->pdo->prepare("SELECT * from posts ORDER BY date DESC LIMIT 1");
      $statement->execute();
      // return a single post object 
      $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Post");
      return $statement->fetch();
    } catch (PDOException $exception) {
      echo "Connection error" . $exception->getMessage();
    }
  }


  public function delete_posts($id) 
  {
    $statement = $this->pdo->prepare("DELETE from posts WHERE id = :id");
    // execute 
  }

}

?>


