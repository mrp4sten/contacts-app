<?php 

$host = "127.0.0.1";
$database = "contacts_app";
$user = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$host; dbname=$database", $user, $password);  
} catch(PDOException $ex) {
  die("PDO Connection Error: " .  $ex->getMessage());
}

?>
