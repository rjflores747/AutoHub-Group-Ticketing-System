 <?php
 session_start();
 include './connect.php';
 
$fromUser = $_POST["fromUser"];
$toUser = $_POST["toUser"];
$message = $_POST["message"];
 
$output="";
$sql="INSERT INTO ticket_messegers(ticket_from_user, ticket_to_user, ticket_message) 
VALUES ('$fromUser','$toUser','$message')";

if($conn -> query($sql))
{
    $output.="";
}
else
{
    $output.="Error. Please Try Again";
}
echo $output;
 ?>