<?php

include "database_connection.php";
include "../classes/CommentMethod.php";


$content = $_POST['subject'];

//start Comment Method
$create_comment = new CommentMethod($pdo);


$new_comment= new Comment();

$registration_steps->register_user($new_user);

?>