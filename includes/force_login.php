<?php

/**
* Include this file on every page you what the user to access ONLY if the user is logged in.
* If the user is not logged in, they will be redirected to the login/register page.
*/

if (empty($_SESSION["username"])) {
  header("Location: ../views/login_page.php");
}
?>