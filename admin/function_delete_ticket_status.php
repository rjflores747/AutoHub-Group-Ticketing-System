<?php
require_once '../connect.php';
if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $return_arr = array(); 
    $query = "DELETE FROM ticket_status WHERE ticket_status_id='$id'"; 
    $query_run = mysqli_query($conn, $query); // echo $query; exit;
    $deleted = mysqli_affected_rows($conn);

    if($query_run > 0)
    {
      $return_arr['status'] = 1;
  
    }
    else
    {
        // echo '<script> alert("Data Not Deleted"); </script>';
        $return_arr['status'] = 0;
    }
   
    // echo json_encode($return_arr);
    header("location: ../admin/ticket_status_add_container.php");
 

}
 
?>