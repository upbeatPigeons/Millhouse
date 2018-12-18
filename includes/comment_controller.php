<?php

session_start();

require_once "database_connection.php";
require_once "../classes/CommentMethod.php";

/*
* Controller file with the actions and validations for creating and deleting a comment.
* Is included on single_post_page.
*/


switch ($_GET['action']) {
  case 'create_comment':

  $content = $_POST["comment"];
  $created_by = $_SESSION["username"];
  $postId = $_GET["id"];
  $id = $_POST["delete_comment"];

  // Create new instance of class CommentMethods to have access to Class CommentMethods
  $create_method = new CommentMethod($pdo);

  // If the user tries to submit an empty comment, show error message
  if (empty($content)) {
    $comment_error = "You cannot submit an empty comment";
  } else {
    // If the comment content is not empty, create the comment
    $new_comment = new Comment();

    // Set the comment properties
    $new_comment->set_content($content);
    $new_comment->set_created_by($created_by);
    $new_comment->set_postId($postId);

    // Save the comment in the database
    $create_method->save_comment_to_database($new_comment);

    // Go back to the post
    header("Location: ../views/single_post_page.php?id=".$postId);
  }
  break;

  case 'delete_comment':
    
  $content = $_POST["comment"];
  $created_by = $_SESSION["username"];
  $postId = $_GET["id"];
  $id = $_POST["delete_comment"];

  $delete_comment_method = new CommentMethod($pdo);
  $delete_comment_method->delete_comment($id);

  header("Location: ../views/single_post_page.php?id=".$postId);

  break;
}

?>