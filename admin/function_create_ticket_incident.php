
<?php

require_once '../connect.php';
if (!isset($_SESSION["email"])) {
		header("Location: index.php");
		exit();
	}
use LDAP\Result;
    $date = date('d-m-y h:i:s');
  
    $fn = $_SESSION['ticket_fn']. $_SESSION['ticket_ln'];
    $user_id = $_SESSION['user_id'];
    $employee_id = $_SESSION['id'];
    $sortdiscription = $_POST['inputSubject'];
    $discription = $_POST['inputMessage'];
    $departmentType = $_POST['inputeparment'];

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
        ticket_assign_to, 
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
        'New',
        '',
        '',
        '',
        '',
        '',
        '$departmentType',
        '$date',
        '');";
       
        $result = mysqli_query($conn,$sql);
        if ($result) {
            $last_id = mysqli_insert_id($conn);
            if($last_id){
            $code = rand(1,99999);
            $ticket_number = "ATK_".$code."_".$last_id;
            $query = "UPDATE ticket_incident SET ticket_number = '".$ticket_number."', u_id = '".$employee_id."'  WHERE id = '".$last_id."'";      
            $res = mysqli_query($conn,$query);
           
            }
            
        } 
         // Insert visitor activity log into database 
            $ActivityLogs = mysqli_query($conn,"INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('".$_SESSION['id']."','You have successfully add new ticket' ,NOW())");
      
        
        header("location: ../admin/ticket_details_container.php?id=".$last_id);
       
    
?>
