<?php
require_once('database_connection.php');
//require_once('../classes/CommentMethods.php');
require_once('../classes/CommentMethods.php');

$comment_content = $_POST["comment"];
var_dump($comment_content);


$create_comment = new Comment($pdo);

$new_comment = new CommentMethods($create_comment);

//$create_comment->create_comment($new_comment);

