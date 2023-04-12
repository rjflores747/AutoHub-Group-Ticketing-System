<?php
require_once '../connect.php';
if (!isset($_SESSION["id"])) {
  header("Location: index.php");
  exit();
 
}
$message = '';

if(count($_POST)>0) {
  
mysqli_query($conn,"UPDATE ticket_suggestions set
 id='" . $_POST['update_id'] . "', 
 suggestions_name='" . $_POST['suggestions_name'] . "' ,
 suggestions_description='" . $_POST['suggestions_description'] . "', 
 suggestions_status='1' WHERE id='" . $_POST['update_id'] . "'");


 // Insert visitor activity log into database 
$ActivityLogs = mysqli_query($conn,"INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('".$_SESSION['u_id']."','Updating the Ticket Incident' ,NOW())");


$message = "Record Modified Successfully";

}
error_reporting(E_ALL);
ini_set('display_errors',1);
$result = mysqli_query($conn,"SELECT * FROM ticket_suggestions WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>

<form name="frmUser" method="post" action="">
<div>
  
</div>
<div style="padding-bottom:5px;">
<!-- <a href="retrieve.php">Employee List</a> -->
  <div class="modal-body">
                                <!-- text input ticket no & contacttype -->
                                <input type="hidden" name="update_id"  value="<?php echo $row['id']; ?>" id="update_id">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                    <label for="id" class="col-sm-2 col-form-label">Id</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="id" name="id" value="<?php echo $row['id']; ?>" placeholder="TicketNo" disabled>
                                    </div>
                                  </div>
                                  </div>
                               
                                </div>
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                      <label for="suggestions_name" class="col-sm-2 col-form-label">Suggesstion Name</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="suggestions_name" name="suggestions_name"value="<?php echo $row['suggestions_name']; ?>" placeholder="Suggestions Name">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                      <label for="suggestions_description" class="col-sm-2 col-form-label">Description</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="suggestions_description" name="suggestions_description"value="<?php echo $row['suggestions_description']; ?>" placeholder="Description">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                  <!-- text input Caller & State -->
                               
                              
                                <div class="modal-footer">
                                    <a href="../admin/ticket_table_container.php" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                    <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                                </div>
                              </div>