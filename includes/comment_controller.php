<?php

session_start();

include "database_connection.php";
include "../classes/CommentMethod.php";

/*getting values for Mysql
* we get $content from form input $_POST['comment'];
*/


$content = $_POST["comment"];
$created_by = $_SESSION["username"];
$post_id = $_GET["id"];



//screate new instance of class CommentMethods to have access to Class CommentMethods
$create_method = new CommentMethod($pdo);

//create new instance of class Comment to later set properties of Comment
$new_comment = new Comment();

//sett values for new comment through setter method
//not setting date, cause we dont have a setter method for it
$new_comment->set_content($content);
$new_comment->set_createdBy($created_by);
$new_comment->set_postId($post_id);

//object $create_method accesse function save_comment_to_database from CommentMethod 
// saving our object $new_comment
$create_method->save_comment_to_database($new_comment);

header('location: ../views/single_post_page.php?id='.$post_id);


?>