<?php

session_start();

include "database_connection.php";
include "../classes/CommentMethod.php";


	$content = $_POST["comment"];
	$created_by = $_SESSION["username"];
	$postId = $_GET["id"];
	$id = $_POST["delete_comment"];



/* Delete comment function
*  Received comment id as $_POST["delete_comment"]
* If its set the function runs and return to single post page 
* We send postID as $_GET in header
*/

if(isset($_POST["delete_comment"])) {
     
	  //echo $id;
    
		$delete_comment_method = new CommentMethod($pdo);
		$delete_comment_method->delete_comment($id);
	
header('Location: ../views/single_post_page.php?id='.$postId);
}


//Create new instance of class CommentMethods to have access to Class CommentMethods

$create_method = new CommentMethod($pdo);

//create new instance of class Comment to later set properties of Comment
$new_comment = new Comment();

/*
* Set values for new comment through setter method
* not setting date, cause we dont have a setter method for it
*/

if (!empty($content)) {

$new_comment->set_content($content);
$new_comment->set_created_by($created_by);
$new_comment->set_postId($postId);

/* 
* Object $create_method accesses function save_comment_to_database 
* from CommentMethod 
* Saving data as object $new_comment
*/
$create_method->save_comment_to_database($new_comment);

header('location: ../views/single_post_page.php?id='.$postId);
	
} 


?>