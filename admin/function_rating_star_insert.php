<?php
require_once '../connect.php';
if (isset($_GET['id'])) {
  $lastId = $_GET['id'];

  $creatTk="SELECT * FROM ticket_incident WHERE id= '".$lastId."'";
  $query_run = mysqli_query($conn,$creatTk);
  $row = mysqli_fetch_array($query_run);
    // echo'last number <h1>'.$lastId. '</h1> ';
  // if (!isset($_SESSION["id"])) {
  // header("Location: index.php");
  // exit();
 
// }
}
// getting data into id of table
$result = mysqli_query($conn,"SELECT * FROM ticket_incident WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

// // getting data into id of table



if ($_SERVER["REQUEST_METHOD"] == "POST" || isset($_POST['id']))
{
  
      // $id = $_POST['id'];
      $ticket_id = $_SESSION['ticket_employee_id'];
      $ticket_number = $_GET['id'];

      $rating = $_POST["rating"];
      // $user_id = $_POST["user_id"];

      
    
      // Insert the rating into the database
      $sql = "INSERT INTO ticket_rating (id,rating_ticket_id,ticket_number,rating_user_rate) VALUES ('','$ticket_id','$id','$rating')";
      mysqli_query($conn, $sql);

      // Close the database connection
      mysqli_close($conn);
  
}
?>