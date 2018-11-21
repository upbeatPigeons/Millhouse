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
// $pdo = new PDO("mysql:host=$servername;dbname=fed18", $username, $password);