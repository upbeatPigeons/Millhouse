<?php

require "Comment.php";

class CommentMethod
{
	
	private $pdo;
	
  // PDO object gets passed as a parameter to encapsulate the database operations for Comments inside this class
	public function __construct($pdo){
		
    $this->pdo =$pdo;
	}

	// Saves the comment to database.
	public function save_comment_to_database(Comment $new_comment){
		
		$statement =$this->pdo->prepare("INSERT INTO comments(content, post_id, created_by, date) VALUES(:content, :post_id, :created_by, :date)");
		
		$statement->execute ([
  		":content" => $new_comment->get_content(),
  		":post_id" => $new_comment->get_postId(),
      ":created_by" =>$new_comment->get_created_by(),
      ":date" => $new_comment->get_date()
    ]);
  }
	
 // List all comments as instances of the Comment class
 public function list_all_comments($postId)
 {
	 $statement= $this->pdo->prepare("SELECT * FROM comments WHERE post_id = :post_id ORDER BY date DESC");
	 
	 $statement->execute([
		 ":post_id" => $postId
	 ]);
	 
	 /* 
		* We will use FETCH_CLASS to return an array consisting of       
		* objects from the Comment class
    * FETCH_CLASS fetches database rows into an object
    * With FETCH_CLASS, data is populated before the constructor is * called 
    * Our constructor initializes the date, so to avoid that the 
		* values from the database are being overwritten with the same 
		* values every time, we simply add PDO::FETCH_PROPS_LATE when 
		* calling fetchAll so the constructor will be called first.
    */
	 
	 return $statement->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Comment");
 }
	
	
	//Deletes a comment
  public function delete_comment($id)
  {
	 $statement = $this->pdo->prepare("DELETE from comments WHERE id = :id ");
	
	 $statement->execute([
			 ":id" => $id
     ]); 
 }
 
}

?>