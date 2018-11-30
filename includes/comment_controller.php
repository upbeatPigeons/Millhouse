<?php
require_once('database_connection.php');
//require_once('../classes/Comment.php');
require_once('../classes/CommentMethods.php');

$comment_content = $_POST["comment"];

$methods = new CommentMethods($pdo);
$new_comment = new Comment();
$new_comment->set_comment($comment_content);
$methods->create_comment($new_comment);



    /* $access_posts = new Access_posts($pdo);
    $new_post = new Post();
    $new_post->set_title($title);
    $new_post->set_description($description);
    $new_post->set_created_by($created_by);
    $new_post->set_category($category);
    $access_posts->create($new_post); */
	
