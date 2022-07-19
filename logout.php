<?php 
session_start();

require_once './connect.php';
 // Insert visitor activity log into database 
 $ActivityLogs = mysqli_query($conn,"INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('".$_SESSION['u_id']."','You have successfully logged out' ,NOW())");

session_unset();
session_destroy();

header("Location: index.php");
$firstname = $_SESSION['ticket_ln'];
$lastname = $_SESSION['ticket_ln'];

exit;