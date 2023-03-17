
<?php

require_once '../connect.php';
// if (!isset($_SESSION["id"])) {
// 		header("Location: index.php");
// 		exit(); 
// 	}
use LDAP\Result;
if (isset($_POST["inputSubject"]) && isset($_POST["inputMessage"])&&isset($_POST["inputeparment"])) {
    $date = date('yyyy-m-d h:i:s');
    $departmentType = $_POST['inputSubject'];
    $sortdiscription = $_POST['inputMessage'];
    $discription = $_POST['inputeparment'];
    $fn = $_SESSION['ticket_fn']. $_SESSION['ticket_ln']; 
    // $user_id = $_SESSION['user_id'];
    $employee_id = $_SESSION['id'];
    // $sortdiscription = $_POST['inputSubject'];
    // $discription = $_POST['inputMessage'];
    // $departmentType = $_POST['inputeparment'];
    $return_arr = array();
   
        $sql = "INSERT INTO ticket_incident(
        id ,
        ticket_number ,
        u_id ,
        ticket_caller ,
        ticket_category ,
        ticket_subcategory ,
        ticket_service ,
        ticket_config_item ,
        ticket_short_discrip ,
        ticket_discription ,
        ticket_filedownload ,
        ticket_contact_type ,
        ticket_status ,
        ticket_imapact ,
        ticket_urgent ,
        ticket_priority ,
        ticket_assign_group ,
        ticket_assign_to ,
        ticket_department_id ,
        ticket_timeofdate ,
        ticket_timeofdate_end ) 
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
        '',
        '3',
        '',
        '',
        '',
        '',
        '',
        '$departmentType',
        NOW(),
        '');";
       
        $result = mysqli_query($conn,$sql);
        if ($result) {
            $last_id = mysqli_insert_id($conn);
            if($last_id){
            $code = rand(1,99999);
            $ticket_number = "ATK_".$code."_".$last_id;
            $query = "UPDATE ticket_incident SET ticket_number = '".$ticket_number."', u_id = '".$employee_id."'  WHERE id = '".$last_id."'";      
            $res = mysqli_query($conn,$query);
            $return_arr['id'] = $last_id; // success
            }
            
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
        
         // Insert visitor activity log into database 
            $ActivityLogs = mysqli_query($conn,"INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('".$_SESSION['id']."','You have successfully add new ticket' ,NOW())");
      
            echo json_encode($return_arr);
        header("location: ../admin/ticket_details_container.php?id=".$last_id);
       
}
?>
