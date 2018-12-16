<?php 
/*
* Logs out the user by destroying the session
*/

session_start();
session_destroy();
header('Location: ../index.php');
?>