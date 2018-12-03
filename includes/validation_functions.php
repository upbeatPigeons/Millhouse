<?php

function get_class_for_error_message($has_error) {
  if ($has_error) {
    echo "d-block invalid-feedback";
  } else {
    echo "d-none";
  }
}

function show_error_messages($error_message) {
  if (isset($error_message)) {
    echo str_replace("_", " ", $error_message);
  }
}

?>
