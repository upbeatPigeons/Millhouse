<?php
session_start();

require_once "../classes/Post.php";
require_once "../classes/Posts_access.php";
require_once "database_connection.php";

/*
* Controller file 
*/

switch ($_GET["action"]) {
	case 'create':

  $title = $_POST["title"];
  $description = $_POST["description"];
  $category = $_POST["category"];
  $created_by = $_POST["created_by"];
  $image_url = $_POST["image"];

  $do_redirect = true;

  $access_posts = new Access_posts($pdo);

    // Title validation: Cannot be empty

  if (empty($title)) {
    $empty_title = true;
    $empty_title_error_message = 'Please enter a title';
    $do_redirect = false;
  } 

    // Description validation: Cannot be empty

  if (empty($description)) {
    $empty_description = true;
    $empty_description_error_message = 'You cannot submit an empty blog post';
    $do_redirect = false;
  } 

    // Category validation: Cannot be empty

  if (empty($category)) {
    $empty_category = true;
    $empty_category_error_message = 'Please select a category';
    $do_redirect = false;
  } 

    // If all the fields have been filled out, create the post and store it in the db

  if ($do_redirect) {
	 // Replace created_by with $_SESSION["user_id"] when available
    $new_post = new Post();
    $new_post->set_title($title);
    $new_post->set_description($description);
    $new_post->set_created_by($created_by);
    $new_post->set_category($category);


    // if the image url is not empty, set it
    if (!empty($image_url)) {
       $new_post->set_image($image_url);
    }

    $access_posts->create($new_post);
	 // echo to test that it works to create the post
	 // echo "Created post with title " . $new_post->get_title();
  }
  break;
}

?>