<?php

// Styles the error message div in case of a validation error
function get_class_for_error_message($has_error) {
  if ($has_error) {
    echo "d-block invalid-feedback";
  } else {
    echo "d-none";
  }
}

// Prettifies the error message.
// Expects the error message to come as a URL variable.
function show_error_messages($error_message) {
  if (isset($error_message)) {
    echo str_replace("_", " ", $error_message);
  }
}

?>
