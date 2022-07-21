<?php
require_once '../connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $ticket_id = $_POST["ticket_id"];
    $rating = $_POST["rating"];
    
    $sql = "INSERT INTO ticket_rating (rating_ticket_id,rating_user_rate) VALUES ('$ticket_id','$rating')
    on duplicate key update rating_user_rate = values(rating_user_rate) ";
     // Insert visitor activity log into database 
     $ActivityLogs = mysqli_query($conn,"INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('".$_SESSION['u_id']."','You have successfully rating' ,NOW())");

    if (mysqli_query($conn, $sql))
    {
        echo "New Rate addedddd successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>