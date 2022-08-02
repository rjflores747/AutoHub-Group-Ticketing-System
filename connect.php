<?php
@session_start();

define('APP_URL','http://localhost/AutoHub-Group-Ticketing-System');
require_once 'utility.php';
// $array_data ['uri'] = 'https://autohub.ph/connect/api/v1/asa/api.php';
// $array_data['parameters'] = http_build_query(array('key'=>'99799116300681219'));

// echo Utility::curl($array_data);


// exit;


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