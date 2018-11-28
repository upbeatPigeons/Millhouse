<?php
require_once('database_connection.php');
//require_once('../classes/Comment.php');
require_once('../classes/CommentMethods.php');

$comment_content = $_POST["comment"];

$comment_steps = new CommentMethods($pdo);
$new_comment = new Comment($comment_content);
$comment_steps->create_comment($new_comment);