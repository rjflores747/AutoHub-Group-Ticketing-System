<?php
require_once '../connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $ticket_id = $_SESSION['id'];
    $rating = $_POST["rating"];
    // $user_id = $_POST["user_id"];
    
   
    // Insert the rating into the database
    $sql = "INSERT INTO ticket_rating (id,rating_ticket_id,rating_user_rate) VALUES ('','$ticket_id','$rating')";
    mysqli_query($conn, $sql);

    // Close the database connection
    mysqli_close($conn);
    
}
?>