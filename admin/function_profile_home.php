<?php
require_once '../connect.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE table_user    set
 id='" . $_POST['update_id'] . "', 
 ticket_category='" . $_POST['inputcategory'] . "' ,
 ticket_subcategory='" . $_POST['inputsubcategory'] . "', 
 ticket_service='" . $_POST['inputService'] . "', 
 ticket_config_item='" . $_POST['inputconfigitem'] . "' ,
 ticket_short_discrip='" . $_POST['inputSubject'] . "', 
 ticket_discription='" . $_POST['inputMessage'] . "', 
 ticket_contact_type='" . $_POST['contacttype'] . "' ,
 ticket_status='" . $_POST['inputstate'] . "', 
 ticket_imapact='" . $_POST['inputImpact'] . "', 
 ticket_urgent='" . $_POST['inputurgent'] . "' ,
 ticket_priority='" . $_POST['inputPriority'] . "', 
 ticket_assign_group='" . $_POST['deptgroup'] . "', 
 ticket_assign_to='' ,
 ticket_department_id='" . $_POST['tkdepart'] . "'WHERE id='" . $_POST['update_id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM ticket_incident WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>