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


