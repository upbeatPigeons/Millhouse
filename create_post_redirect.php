<?php
session_start();
require_once "database_connection.php";

if (isset($_SESSION['username']) && $_SESSION['username'] == "admin"){
	header('Location: /');
	exit;
}