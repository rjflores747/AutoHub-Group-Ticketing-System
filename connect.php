<?php
@session_start();
// change the url if you have a local 
// <<<<<<< HEAD
define('APP_URL','http://192.168.8.187/AutoHub-Group-Ticketing-System/');
// =======
// define('APP_URL','https://ticketing-system.adrianpusana.com');

require_once 'utility.php';
// $array_data ['uri'] = 'https://autohub.ph/connect/api/v1/asa/api.php';
// $array_data['parameters'] = http_build_query(array('key'=>'99799116300681219'));

// echo Utility::curl($array_data);


// exit;

$servername = "localhost";
$username = "root";
// $username = "autoph_helpdesk";
// $password = "AGc@2023#$@help@";
$password = "";
$db ="autohub-ticketing";
  // $servername = "ticketing-system.adrianpusana.com";
  // $username = "syofdjax_alberto_flores";
  // $password = "v,O@0OngL;}g";
  // $db ="syofdjax_ticketing";

  // Create connection
  $conn = new mysqli($servername, $username, $password,$db);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // echo "Connected successfully";
?>
