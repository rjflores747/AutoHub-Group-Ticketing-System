
<?php

require_once '../connect.php';
// if (!isset($_SESSION["id"])) {
// 		header("Location: index.php");
// 		exit(); 
// 	}
use LDAP\Result;
// if (isset($_POST["var_department"]) && isset($_POST["var_subject"])&&isset($_POST["var_message"])) {
    if (isset($_POST["submit"])) {
    $date = date('yyyy-m-d h:i:s');
    $departmentType = $_POST['inputeparment'];
    $sortdiscription = $_POST['inputSubject'];
    // $discription = $_POST['inputMessage'];
    $discription = addslashes($_POST['inputMessage']);  

    $fn = $_SESSION['ticket_fn']. $_SESSION['ticket_ln']; 
    // $user_id = $_SESSION['user_id'];
    $employee_id = $_SESSION['id'];
    // $sortdiscription = $_POST['inputSubject'];
    // $discription = $_POST['inputMessage'];
    // $departmentType = $_POST['inputeparment'];
    $return_arr = array();
   
        $sql = "INSERT INTO ticket_incident(
        id,
        u_id,
        ticket_number, 
        ticket_caller, 
        ticket_category, 
        ticket_subcategory, 
        ticket_service, 
        ticket_config_item, 
        ticket_short_discrip, 
        ticket_discription, 
        ticket_contact_type, 
        ticket_status, 
        ticket_imapact, 
        ticket_urgent, 
        ticket_priority, 
        ticket_assign_group, 
        ticket_department_id, 
        ticket_timeofdate, 
        ticket_timeofdate_end) 
        VALUES 
        ('',
        '".$employee_id."',
        '',
        '".$fn."',
        '',
        '',
        '',
        '',
        '$sortdiscription',
        '$discription',
        '',
        '3',
        '',
        '',
        '',
        '',
        
        '$departmentType',
        NOW(),
        '');";
       
        $result = mysqli_query($conn,$sql);
        // print_r($result); 
         
        if ($result) {
            // print_r("testing");
            $last_id = mysqli_insert_id($conn);
            if($last_id){
            $code = rand(1,99999);
            $ticket_number = "ATK_".$code."_".$last_id;
            $query = "UPDATE ticket_incident SET ticket_number = '".$ticket_number."', u_id = '".$employee_id."'  WHERE id = '".$last_id."'";      
            $res = mysqli_query($conn,$query);
            $return_arr['id'] = $last_id; // success
            }
            if($result > 0)
            {
              $return_arr['status'] = 1;
             
            }
            else
            {
                // echo '<script> alert("Data Not Deleted"); </script>';
                $return_arr['status'] = 0;
            } 
            
        }
      
        
         // Insert visitor activity log into database 
         $ActivityLogs = mysqli_query($conn,"INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('".$_SESSION['id']."','You have successfully add new ticket' ,NOW())");
      
            echo json_encode($return_arr);
        // header("location: ../admin/ticket_details_container.php?id=".$last_id);
       
}
?>
<?php
require_once '../connect.php';

// if (!isset($_SESSION["id"])) {
//   header("Location: index.php");
//   exit();
 
// }
// if(isset($_POST['ticket_id']))
if(isset($_POST["submit"]))
{
    $departmentType = $_POST['inputeparment'];
    $sortdiscription = $_POST['inputSubject'];
    // $user_id = $_SESSION['id'];
    // $id = $_POST['ticket_id'];
    $message = addslashes($_POST['inputMessage']);  
    $fn = $_SESSION['ticket_fn']. $_SESSION['ticket_ln']; 
    $employee_id = $_SESSION['id'];

    $return_arr = array(); 
    // $queryMessage = "INSERT INTO `ticket_chat`(`ticket_id`, `ticket_user_id`, `ticket_date_time`, `ticket_message`, `ticket_status`) VALUES ('$id','$user_id',NOW(),'$message','1')"; 
   $queryMessage ="INSERT INTO `ticket_incident`(
    `id`, 
    `ticket_number`, 
    `u_id`, 
    `ticket_caller`, 
    `ticket_category`, 
    `ticket_subcategory`, 
    `ticket_service`, 
    `ticket_config_item`, 
    `ticket_short_discrip`, 
    `ticket_discription`, 
    `ticket_filedownload`, 
    `ticket_contact_type`, 
    `ticket_status`, 
    `ticket_imapact`, 
    `ticket_urgent`,
    `ticket_priority`, 
    `ticket_assign_group`,
    `ticket_assign_to`, 
    `ticket_department_id`, 
    `ticket_timeofdate`,
    `ticket_timeofdate_end`) 
   VALUES (
    '',
    '',
    '$employee_id',
    '$fn',
    '',
    '',
    '',
    '',
    '$sortdiscription',
    '$message',
    '',
    '',
    '',
    '',
    '',
    '',
    '',
    '',
    '$departmentType',
    NOW(),
    '')";
    $query_run = mysqli_query($conn, $queryMessage); // echo $query; exit;
    $insertedmessageid = mysqli_insert_id($conn);
    if($insertedmessageid){
    $code = rand(1,99999);
    $ticket_number = "ATK_".$code."_".$insertedmessageid;
    $query = "UPDATE ticket_incident SET ticket_number = '".$ticket_number."', u_id = '".$employee_id."'  WHERE id = '".$insertedmessageid."'";      
    $res = mysqli_query($conn,$query);
    $return_arr['id'] = $insertedmessageid; // success
    if($insertedmessageid )
    {
      $return_arr['status'] = 1;
      
     
    }
    else
    {
        
        $return_arr['status'] = 0;
    }
    }

    echo json_encode($return_arr);
        // header("location: ../admin/ticket_details_container.php?id=".$last_id);

}

?>