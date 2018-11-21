<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
$pdo = new PDO("mysql:host=$servername;dbname=fed18", $username, $password);
// set the PDO error mode to exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully \n";
} catch (PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
/* This is the connection we actually are going to use. The above is just for getting feedback during development, to see the database is actually working. */

// $pdo = new PDO("mysql:host=$servername;dbname=fed18", $username, $password);