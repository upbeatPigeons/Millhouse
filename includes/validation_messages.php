<?php 

/*
* This file has the validation error messages we show if the user tries to submit an empty field 
* Is used both in create_post_form and edit_post form
*/

// Use $do_redirect to determine if there is a validation error
$do_redirect = true;

// Title validation: Cannot be empty
if (empty($title)) {
  $empty_title = true;
  $empty_title_error_message = "Title cannot be empty";
  $do_redirect = false;
} 

// Image validation: Cannot be empty
if (empty($image_url)) {
  $empty_image = true;
  $empty_image_error_message = "Please choose an image";
  $do_redirect = false;
} else {
  $image_url = filter_var($image_url, FILTER_SANITIZE_URL);

  if (!filter_var($image_url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) {
    $empty_image = true;
    $empty_image_error_message = "Image url has an invalid format";
    $do_redirect = false;
  }
}

// Description validation: Cannot be empty
if (empty($description)) {
  $empty_description = true;
  $empty_description_error_message = "You cannot submit an empty blog post";
  $do_redirect = false;
} 

// Category validation: Cannot be empty
if (empty($category)) {
  $empty_category = true;
  $empty_category_error_message = "Please select a category";
  $do_redirect = false;
} 

?>