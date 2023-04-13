<?php
require_once '../connect.php';
if(isset($_POST['ticket_id']))
{
    $id = $_POST['ticket_id'];
    $return_arr = array(); 
    // $query = "DELETE FROM ticket_incident WHERE id='$id'"; 
    // $query_run = mysqli_query($conn, $query); // echo $query; exit;
    // $deleted = mysqli_affected_rows($conn);
    $message = '';

    if(count($_POST)>0) {
      
    mysqli_query($conn,"DELETE FROM ticket_incident WHERE id='$id'");
    
    
     // Insert visitor activity log into database 
    $ActivityLogs = mysqli_query($conn,"INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('".$_SESSION['u_id']."','Updating the Ticket Incident' ,NOW())");
    
    
    $message = "Record Modified Successfully";
    
    }
    // if($query_run > 0)
    // {
    //   $return_arr['status'] = 1;
  
    // }
    // else
    // {
    //     // echo '<script> alert("Data Not Deleted"); </script>';
    //     $return_arr['status'] = 0;
    // }
   
    // echo json_encode($return_arr);
    header("location: ../admin/ticket_myticket_table_container.php");
 

}


?>