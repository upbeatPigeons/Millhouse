<?php

require "Comment.php";

class CommentMethod{
	
	private $pdo;
	
	public function __construct($pdo){
		
	  $this->pdo =$pdo;
	}
	
	public function create_comment(Comment $new_comment){
		
		$statement = $pdo->prepare("INSERT INTO comments(content, post_id, created_by, date) VALUES(:content, :post_id, :created_by, :date)");
		
		$statement->execute ([
  		":content" => $new_comment->get_content(),
  		":post_id" => $new_comment->get_postId(),
      ":created_by" =>$new_comment->get_createdBy(),
      ":date" => $new_comment->get_date()
    ]);
  }
		
		
	}
}


?>