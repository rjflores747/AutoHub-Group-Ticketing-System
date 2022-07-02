<?php
require_once '../connect.php';
if(isset($_POST['ticket_id']))
{
    $id = $_POST['ticket_id'];
    $return_arr = array(); 
    $query = "DELETE FROM ticket_incident WHERE id='$id'"; 
    $query_run = mysqli_query($connection, $query); // echo $query; exit;
    $deleted = mysqli_affected_rows($connection);

    if($query_run > 0)
    {
      $return_arr['status'] = 1;
     
    }
    else
    {
        // echo '<script> alert("Data Not Deleted"); </script>';
        $return_arr['status'] = 0;
    }

    echo json_encode($return_arr);
}

?>