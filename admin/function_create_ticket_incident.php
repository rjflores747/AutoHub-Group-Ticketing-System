
<?php
require_once '../connect.php';

if (!isset($_SESSION["id"])) {
  header("Location: index.php");
  exit();
 
}
// if(isset($_POST['ticket_id']))
// if(isset($_POST["submit"]))
if (isset($_POST["inputeparment"]) && isset($_POST["inputSubject"])&&isset($_POST["inputMessage"])) 

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
    '3',
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
    $last_id = mysqli_insert_id($conn);
    var_dump($insertedmessageid);
    exit();
      if($insertedmessageid)
      {
        $return_arr['status'] = 1;
        
      
      }
      else
      {
          
          $return_arr['status'] = 0;
      }


    echo json_encode($return_arr);
        header("location: ../admin/ticket_details_container.php?id=".$insertedmessageid);

}

?>