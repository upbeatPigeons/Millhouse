<?php

function get_class_for_error_message($has_error) {
  if ($has_error) {
    echo "d-block invalid-feedback";
  } else {
    echo "d-none";
  }
}

?>
