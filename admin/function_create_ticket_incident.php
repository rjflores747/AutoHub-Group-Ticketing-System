<?php
require_once '../connect.php';
$query = "SELECT id FROM ticket_incident ORDER BY id DESC";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid = $row['id'];
if(empty($lastid))
{
    $number = "ATK-0000001";
}
else
{
    $idd = str_replace("ATK-", "", $lastid);
    $id = str_pad($idd + 1, 7, 0, STR_PAD_LEFT);
    $number = 'ATK-'.$id;
}
?>
<?php
 
  if($_SERVER["REQUEST_METHOD"]== "POST")
  {
      // $invoiceid = $_POST['invoiceid'];
      // $prodname = $_POST['prodname'];
      // $price = $_POST['price'];
      $departmentType = $_POST['inputeparment'];
      $sortdiscription = $_POST['inputSubject'];
      $inputSla = $_POST['inputSla'];
      $message = addslashes($_POST['inputMessage']);  
      $fn = $_SESSION['ticket_fn']. $_SESSION['ticket_ln']; 
      $employee_id = $_SESSION['id'];
      $position = $_SESSION['ticket_position'];
  
      if(!$conn)
      {
          die("connection failed " . mysqli_connect_error());
      }
      else
      {
          // var_dump( 
            $sql = "INSERT INTO ticket_incident(
          `ticket_number`, 
          `u_id`, 
          `ticket_caller`, 
          `ticket_position`, 
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
          ticket_sla
          )
          VALUES(
          '".$number."',
          '".$employee_id."',
          '".$fn."',
          '".$position."',
          '',
          '',
          '',
          '',
          '".$sortdiscription."',
          '".$message."',
          '',
          '',
          '3',
          '',
          '',
          '',
          '',
          '',
          '".$departmentType."',
          NOW(),
          '".$inputSla."'
          ) ";
          if(mysqli_query($conn,$sql))
          {
            $query = "SELECT id FROM ticket_incident ORDER BY id DESC";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result);
            // var_dump($result);
            // exit;

            $lastid = $row['id'];

              if(empty($lastid))
              {
                  $number = "ATK-0000001";
              }
              else
              {
                  $idd = str_replace("ATK-", "", $lastid);
                  $id = str_pad($idd + 1, 7, 0, STR_PAD_LEFT);
                  $number = 'ATK-'.$id;
              }
  
          }
          else
          {
              echo "Record Faileddd";
          }

        header("location: ../admin/ticket_details_container.php?id=".$lastid);


      }
  }
    ?>