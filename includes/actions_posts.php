<?php
session_start();
require_once "../classes/Post.php";
require_once "../classes/PostMethods.php";
require_once "database_connection.php";
/*
* Controller file 
*/
switch ($_GET["action"]) {
  case 'create':
  
    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $created_by = $_SESSION["username"];
    $image_url = $_POST["image"];

    $do_redirect = true;

    $post_methods = new PostMethods($pdo);

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
      $new_post = new Post();

      $new_post->set_title($title);
      $new_post->set_description($description);
      $new_post->set_created_by($created_by);
      $new_post->set_category($category);

      // if the image url is not empty, set it
      if (!empty($image_url)) {
        $new_post->set_image($image_url);
      }

      $post_methods->create($new_post);
      header("Location: ../views/home_page.php");
    }

    break;

  case 'edit':

    $post_methods = new PostMethods($pdo);
    $post = $post_methods->list_single_post($_GET["id"]);

    if(isset($_POST["title"])){
      $post_methods->edit_post();
      header('Location: ../views/home_page.php');
    }

    break;

}
if (isset($_POST['remove_post'])) {
    $id = $_GET["id"];
    $this_post = New PostMethods($pdo);
    $this_post->delete_posts($id);
    header('Location: ../views/home_page.php');
  }
?>