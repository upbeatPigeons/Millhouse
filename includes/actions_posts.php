<?php
session_start();
require_once "../classes/Post.php";
require_once "../classes/PostMethods.php";
require_once "database_connection.php";

/*
* Controller file with the actions and validations for creating, editing and deleting a post.
* Is included on create_post_page and edit_post_page.
*/

switch ($_GET["action"]) {
  case 'create':
  
    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $created_by = $_SESSION["username"];
    $image_url = $_POST["image"];

    $post_methods = new PostMethods($pdo);

     include "validation_messages.php";

      // If all the fields have been filled out, create the post and store it in the db
    if ($do_redirect) {
      $new_post = new Post();

      $new_post->set_title($title);
      $new_post->set_image($image_url);
      $new_post->set_description($description);
      $new_post->set_created_by($created_by);
      $new_post->set_category($category);

      $post_methods->create($new_post);
      header("Location: ../views/home_page.php");
    }

    break;

  case 'edit':

    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $image_url = $_POST["image"]; 
    $post_id = $_GET["id"];

    $post_methods = new PostMethods($pdo);

    include "validation_messages.php";

      // If all the fields have been filled out, create the post and store it in the db
    if ($do_redirect) {

    // Assign the post you retrieve from the database with its id to a new var called $edited_post
    $edited_post = $post_methods->list_single_post($_GET["id"]);

    // Set the title, description and category
    $edited_post->set_title($title);
    $edited_post->set_image($image_url);
    $edited_post->set_description($description);
    $edited_post->set_category($category);

    // Update the post and go back to the single post page
    $post_methods->edit_post($edited_post);
    header("Location: ../views/single_post_page.php?id=" . $post_id);
    }


    break;

}
if (isset($_POST['remove_post'])) {
    $id = $_GET["id"];
    $this_post = New PostMethods($pdo);
    $this_post->delete_posts($id);
    header("Location: ../views/home_page.php");
  }
?>