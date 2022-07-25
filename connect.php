<?php
@session_start();

define('APP_URL','http://localhost/AutoHub-Group-Ticketing-System');
// echo $_SERVER['DOCUMENT_ROOT'].' ';
// echo __DIR__.' ';
// echo PATH;exit;
$servername = "localhost";
$username = "root";
$password = "";
$db ="autohub-ticketing";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>