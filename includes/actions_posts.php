<?php
session_start();

require_once "../classes/Post.php";

/*
* Controller file 
*/

switch ($_GET["action"]) {
	case 'create':
	 // Replace created_by with $_SESSION["user_id"] when available
	 $new_post = new Post($_POST["title"], $_POST["description"], $_POST["created_by"], $_POST["category"]);

	 // echo to test that it works to create the post
	 // echo "Created post with title " . $new_post->get_title();

	break;
}

?>