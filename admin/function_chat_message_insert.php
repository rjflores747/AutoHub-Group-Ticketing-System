<?php
require_once '../connect.php';

if (!isset($_SESSION["email"])) {
  header("Location: index.php");
  exit();
 
}
if(isset($_POST['ticket_id']))

{
    $user_id = $_SESSION['id'];
    $id = $_POST['ticket_id'];
    $message = addslashes($_POST['message']);  
    
    $return_arr = array(); 
    $queryMessage = "INSERT INTO `ticket_chat`(`ticket_id`, `ticket_user_id`, `ticket_date_time`, `ticket_message`, `ticket_status`) VALUES ('$id','$user_id',NOW(),'$message','1')"; 
    $query_run = mysqli_query($conn, $queryMessage); // echo $query; exit;
    $insertedmessageid = mysqli_insert_id($conn);

    if($insertedmessageid )
    {
      $return_arr['status'] = 1;
      
     
    }
    else
    {
        
        $return_arr['status'] = 0;
    }

    echo json_encode($return_arr);
}

?>