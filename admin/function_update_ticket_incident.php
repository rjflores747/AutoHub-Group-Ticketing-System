<?php
require_once '../connect.php';
if (!isset($_SESSION["id"])) {
  header("Location: index.php");
  exit();
 
}
$message = '';

if(count($_POST)>0) {
  
mysqli_query($conn,"UPDATE ticket_incident set
 id='" . $_POST['update_id'] . "', 
 ticket_category='" . $_POST['inputcategory'] . "' ,
 ticket_short_discrip='" . $_POST['inputSubject'] . "', 
 ticket_discription='" . $_POST['inputMessage'] . "', 
 ticket_contact_type='" . $_POST['contacttype'] . "' ,
 ticket_status='" . $_POST['inputstate'] . "', 
 ticket_imapact='" . $_POST['inputImpact'] . "', 
 ticket_assign_group='', 
 ticket_assign_to='" . $_POST['deptgroup'] . "' ,
 ticket_department_id='" . $_POST['tkdepart'] . "'WHERE id='" . $_POST['update_id'] . "'");


 // Insert visitor activity log into database 
$ActivityLogs = mysqli_query($conn,"INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('".$_SESSION['u_id']."','Updating the Ticket Incident' ,NOW())");


$message = "Record Modified Successfully";

// $message = "Record Modified Successfully";
// echo '<script>alert("Successfully Update.");
// 		window.location="ticket_update_incident_container.php";
// </script>';

}
error_reporting(E_ALL);
ini_set('display_errors',1);
$result = mysqli_query($conn,"SELECT * FROM ticket_incident WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>

<form name="frmUser" method="post" action="">
<div>
  
</div>
<div style="padding-bottom:5px;">
<!-- <a href="retrieve.php">Employee List</a> -->
  <div class="modal-body">
    <h4>My Active tickets</h4>
    <hr>
                                <!-- text input ticket no & contacttype -->
                                <input type="hidden" name="update_id"  value="<?php echo $row['id']; ?>" id="update_id">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                    <label for="variable_ticket_number" class="col-sm-2 col-form-label">Ticket No</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="variable_ticket_number" name="variable_ticket_number" value="<?php echo $row['ticket_number']; ?>" placeholder="TicketNo" disabled>
                                    </div>
                                  </div>
                                  </div>
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                    <label for="variable_ticket_category" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                      <!-- <input type="text" class="form-control" id="inputcategory" placeholder="Category"> -->
                                        <div class="select2-purple">
                                          <select class="form-control select2bs4" id="inputcategory" name="inputcategory" style="width: 100%;">
                                            <option>----- Select Category -----</option>
                                              <?php 
                                              
                                                $querycategory= "SELECT * FROM `ticket-category`
                                                order by category_name ASC";
                                                $resultcategory1= mysqli_query($conn,$querycategory);
                                                
                                                while ($categoryrow= mysqli_fetch_array($resultcategory1)) { 
                                                  if($row['ticket_category'] == $categoryrow['id']){
                                                  ?>  
                                                  <option selected value="<?php echo $categoryrow['id']; ?>"><?php echo $categoryrow['category_name'] ?></option>
                                                  <?php
                                                  
                                                  }
                                                  else
                                                  {
                                                    ?>  
                                                  <option  value="<?php echo $categoryrow['id']; ?>"><?php echo $categoryrow['category_name'] ?></option>
                                                  <?php
                                                  }?>
                                              
                                              <?php } ?>
                                            </select>
                                          </div>
                                    </div>
                                  </div>
                                  </div>
                                </div>
        
                                  <!-- text input Caller & State -->
                                  <div class="row">
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                    <label for="variable_ticket_caller" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="variable_ticket_caller" name="variable_ticket_caller"value="<?php echo $row['ticket_caller']; ?>" placeholder="Caller" disabled>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                      <label for="inputstate" class="col-sm-2 col-form-label">Status</label>
                                      <!-- <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputstate"  name="inputstate" value="<?php echo $row['ticket_status']; ?>" placeholder="State"> -->
                                      <!-- </div> -->
                                      <div class="col-sm-10">
                                      <div class="select2-pur ple">
                                          <select class="form-control select2bs4" id="inputstate" name="inputstate" style="width: 100%;" required>
                                            <option>----- Select CATEGORY -----</option>
                                              <?php 
                                              
                                                $querycategory= "SELECT * FROM `ticket_status`
                                                order by ticket_status_name";
                                                $resultStatus1= mysqli_query($conn,$querycategory);
                                                
                                                while ($Statusrow= mysqli_fetch_array($resultStatus1)) { 
                                                  if($row['ticket_status'] == $Statusrow['ticket_status_id'] ){
                                                  ?>  
                                                  <option selected value="<?php echo $Statusrow['ticket_status_id']; ?>"><?php echo $Statusrow['ticket_status_name'] ?></option>
                                                  <?php
                                                  
                                                  }
                                                  else
                                                  {
                                                    ?>  
                                                  <option  value="<?php echo $Statusrow['ticket_status_id']; ?>"><?php echo $Statusrow['ticket_status_name'] ?></option>
                                                  <?php
                                                  }?>
                                              
                                              <?php } ?>
                                            </select>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                  <!-- text input Category & Impact -->
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                    <label for="variable_ticket_category" class="col-sm-2 col-form-label">Position</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputcategory" value="<?php echo $row['ticket_position']; ?>" disabled placeholder="Position">
                                    
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                      <label for="inputImpact" class="col-sm-2 col-form-label">Level Of Support</label>
                                      <div class="col-sm-10">
                                        <!-- <input type="text" class="form-control" id="inputImpact" name="inputImpact"value="<?php echo $row['ticket_imapact']; ?>" placeholder="Impact"> -->
                                        <div class="select2-purple">
                                          <select class="form-control select2bs4" id="inputImpact" name="inputImpact" style="width: 100%;">
                                            <option >----- Select Level of Support -----</option>
                                            <option value="1"                                           <?php 
                                                  if($row['ticket_imapact'] == "1")
                                                  {
                                                    echo "Selected";
                                                  }?>
                                                  > LOW </option>
                                            <option value="2" <?php 
                                                  if($row['ticket_imapact'] == "2")
                                                  {
                                                    echo "Selected";
                                                  }?>> MID </option>
                                            <option value="HIGH" <?php 
                                                  if($row['ticket_imapact'] == "3")
                                                  {
                                                    echo "Selected";
                                                  }?>> HIGH</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                    <label for="variable_ticket_category" class="col-sm-2 col-form-label">Department</label>
                                    <div class="col-sm-10">
                                      <!-- <input type="text" class="form-control" id="inputcategory" value="<?php echo $row['ticket_position']; ?>" disabled placeholder="Category"> -->
                                            <select class="form-control select2bs4" id="tkdepart" name="tkdepart" style="width: 100%;" >
                                              <!-- <select class="form-control select2bs4" id="inputcategory" name="inputcategory" style="width: 100%;"> -->
                                                <option>----- Select Department -----</option>
                                                  <?php 
                                                  
                                                    $querydepartment = "SELECT * FROM ticket_deparment
                                                    order by ticket_dept_name ASC";
                                                    $resultdepartment= mysqli_query($conn,$querydepartment);
                                                    
                                                    while ($departmentrow= mysqli_fetch_array($resultdepartment)) { 
                                                      if($row['ticket_department_id'] == $departmentrow['ticket_dept_source_id']){
                                                      ?>  
                                                      <option selected value="<?php echo $departmentrow['ticket_dept_source_id']; ?>"><?php echo $departmentrow['ticket_dept_name'] ?></option>
                                                      <?php
                                                      
                                                      }
                                                      else
                                                      {
                                                        ?>  
                                                      <option  value="<?php echo $departmentrow['ticket_dept_source_id']; ?>"><?php echo $departmentrow['ticket_dept_name'] ?></option>
                                                      <?php
                                                      }?>
                                                  
                                                  <?php } ?>
                                                </select>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                      <label for="inputImpact" class="col-sm-2 col-form-label">Assign to</label>
                                      <div class="col-sm-10">
                                        <!-- <input type="text" class="form-control" id="inputImpact" name="inputImpact"value="<?php echo $row['ticket_imapact']; ?>" placeholder="Please record the service you provided"> -->
                                        <div class="select2-purple">
                                        <select class="form-control select2bs4" id="deptgroup" name="deptgroup" style="width: 100%;">

                                          <!-- <select class="select2" id="deptgroup" name="deptgroup" multiple="multiple" data-placeholder="Select a Assignment" data-dropdown-css-class="select2-purple" style="width: 100%;"> -->
                                          <option value="" required >----- Select Assign to -----</option>
                                                <?php 
                                                  $queryusers= "SELECT * FROM `ticket_user`
                                                  order by ticket_user_department ASC";
                                                  $resultcategory1= mysqli_query($conn,$queryusers);
                                                  
                                                  while ($usersrow= mysqli_fetch_array($resultcategory1)) { 
                                                    if($row['ticket_assign_to'] == $usersrow['id']){
                                                    ?>  
                                                    <option selected value="<?php echo $usersrow['id']; ?>"><?php echo $usersrow['ticket_fn'] ?> <?php echo $usersrow['ticket_ln'] ?> </option>
                                                    <?php
                                                    
                                                    }
                                                    else
                                                    {
                                                      ?>  
                                                    <option  value="<?php echo $usersrow['id']; ?>"><?php echo $usersrow['ticket_fn'] ?> <?php echo $usersrow['ticket_ln'] ?> </option>
                                                    <?php
                                                    }?>
                                                
                                                <?php } ?>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                
                                <div class="row">
                                  <div class="col-sm-12">
                                    <div class="form-group">
                                    <label for="inputSubject" class="col-sm-2 col-form-label">Subject</label>
                                    <input type="text" style="background: transparent;" id="inputSubject" name="inputSubject" value="<?php echo $row['ticket_short_discrip']; ?>" class="form-control" readonly/>
                                  
                                  </div>
                                   
                                  </div>
                                </div>
                                
        
                                  <!-- text input Configuration & Assignmentgroup -->
                               
        
                                  
                               
                                  <div class="form-group">
                                    <label for="inputMessage">Description</label>
                                    <textarea id="inputMessage" class="form-control"style="background: transparent;"  name="inputMessage"  rows="4"readonly><?php echo $row['ticket_discription']; ?></textarea>
                                  </div>
                                  <!-- <div class="row"> -->
                                  <!-- <div class="col-sm-12"> -->
                                    <div class="form-group">
                                      <label for="variable_ticket_contact_type" class="col-sm-2 col-form-label">Service</label>
                                      <input type="text" style="background: transparent;" id="contacttype" name="contacttype" value="<?php echo $row['ticket_config_item']; ?>" class="form-control" placeholder="Please record the service you provided"/>
                                  
                                    </div>
                                  
                                  <!-- </div> -->
                                <!-- </div> -->
                                 
                                </div>

                                
                                <div class="modal-footer">
                                    <a href="../admin/ticket_myticket_table_container.php" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                    <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                                </div>
                              </div>