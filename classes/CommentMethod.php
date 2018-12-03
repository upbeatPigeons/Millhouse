<?php

require "Comment.php";

class CommentMethod{

// now when we use class Comment we call with parameter $pdo	
	
	private $pdo;
	
	public function __construct($pdo){
		
    $this->pdo =$pdo;
	}

	/*We create $new_comment from class Comment
	* new function to save comment to database
	*/
		
	public function save_comment_to_database(Comment $new_comment){
		
		$statement =$this->pdo->prepare("INSERT INTO comments(content, post_id, created_by, date) VALUES(:content, :post_id, :created_by, :date)");
		
		$statement->execute ([
  		":content" => $new_comment->get_content(),
  		":post_id" => $new_comment->get_postId(),
      ":created_by" =>$new_comment->get_createdBy(),
      ":date" => $new_comment->get_date()
    ]);
  }
	
 // new function to list all comments
 public function list_all_comments($postId){
	 
	 $statement->$this->pdo("SELECT * FROM comments WHERE post_id = :post_id ORDER BY date DESC" );
	 
	 $statement->execute([
		 ":post_id" => $postId;
	 ]);
	 
   $list_all_comments->$statement->fetchAll(PDO::FETCH CLASS, "Comment")
 }	 
	 
}


?>