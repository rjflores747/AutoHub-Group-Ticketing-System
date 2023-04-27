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
                                      <label for="variable_ticket_contact_type" class="col-sm-2 col-form-label">Contact Type</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="contacttype" name="contacttype"value="<?php echo $row['ticket_config_item']; ?>" placeholder="Contact type">
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
                                          <select class="form-control select2bs4" id="inputstate" name="inputstate" style="width: 100%;">
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
                                    <label for="variable_ticket_category" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                      <!-- <input type="text" class="form-control" id="inputcategory" placeholder="Category"> -->
                                        <div class="select2-purple">
                                          <select class="form-control select2bs4" id="inputcategory" name="inputcategory" style="width: 100%;">
                                            <option>----- NONE CATEGORY -----</option>
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
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                      <label for="inputImpact" class="col-sm-2 col-form-label">Impact</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputImpact" name="inputImpact"value="<?php echo $row['ticket_imapact']; ?>" placeholder="Impact">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- text input Subcategory & Urgent -->
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                    <label for="inputsubcategory" class="col-sm-2 col-form-label">Subcategory </label>
                                    <div class="col-sm-10">
                                      <div class="select2-purple">
                                        <input   class="form-control"  id="inputsubcategory" name="inputsubcategory"  value="<?php echo $row['ticket_subcategory']; ?>">
                                         
                                      </div>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                      <label for="inputurgent" class="col-sm-2 col-form-label">Urgent</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputurgent" name="inputurgent"value="<?php echo $row['ticket_urgent']; ?>" placeholder="Urgent">
                                      </div>
                                    </div>
                                  </div>
                                </div>
        
                                  <!-- text input Subcategory & Urgent -->
                                  <div class="row">
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                    <label for="inputService" class="col-sm-2 col-form-label">Service</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputService" name="inputService"value="<?php echo $row['ticket_service']; ?>" placeholder="Service">
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                      <label for="inputPriority" class="col-sm-2 col-form-label">Priority</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPriority" name="inputPriority"value="<?php echo $row['ticket_priority']; ?>" placeholder="Priority">
                                      </div>
                                    </div>
                                  </div>
                                </div>
        
                                  <!-- text input Configuration & Assignmentgroup -->
                                  <div class="row">
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                    <label for="inputconfigitem" class="col-sm-2 col-form-label">Config Item</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputconfigitem" name="inputconfigitem"value="<?php echo $row['ticket_config_item']; ?>" placeholder="Service">
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                      <label for="tkdepart" class="col-sm-2 col-form-label">Department</label>
                                      <div class="col-sm-10">
                                         <div class="select2-purple">
                                          <select class="form-control select2bs4" id="tkdepart" name="tkdepart" style="width: 100%;" >
                                            <?php
                                              $array_data ['uri'] = 'https://autohub.ph/connect/api/v1/asa/api.php';
                                              $array_data['parameters'] = http_build_query(array('key'=>'99799116300681219'));
                                              
                                                $result = Utility::curl($array_data);
                                                $department_array = json_decode($result,true);
                                                foreach($department_array as $row1) {
                                                  if($row1['id'] == $row1['dept_name'] ){
                                                    ?>  
                                                <!-- // foreach($department_array as $row1) -->
                                                <!-- { -->
                                                  <option  value="<?php echo $row1['id']?>" selected>
                                                  <?php echo $row1['dept_name'];?>
                                                  <?php
                                                  
                                                }
                                                else
                                                {
                                                  ?>  
                                                  <option  value="<?php echo $row1['id']?>" >
                                                  <?php echo $row1['dept_name'];?>
                                                </option>
                                                  <?php 

                                                }
                                                  ?>
                                                  <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
        
                                <!-- text input Subcategory & Assignmentto -->
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                    
                                    <div class="col-sm-10">                                                                                                                     
                                    
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-sm-6">
                               
                                    <div class="form-group row">
                                      <label for="inputPriority" class="col-sm-2 col-form-label">Assign to</label>
                                      <div class="col-sm-10">
                                      <!-- <input type="text" class="form-control" id="inputdepartment" name="inputdepartment" value="<?php echo $row['ticket_assign_group']; ?>" /> -->
                                      <div class="select2-purple">
                                          <select class="form-control select2bs4" id="deptgroup" name="deptgroup" style="width: 100%;">

                                      <!-- <select class="select2" id="deptgroup" name="deptgroup" multiple="multiple" data-placeholder="Select a Assignment" data-dropdown-css-class="select2-purple" style="width: 100%;"> -->
                                       <option >----- NONE DEPARMENT -----</option>
                                             <?php 
                                              $querycategory= "SELECT * FROM `ticket_incident`
                                              order by ticket_department_id ASC";
                                              $resultcategory1= mysqli_query($conn,$querycategory);
                                              
                                              while ($categoryrow= mysqli_fetch_array($resultcategory1)) { 
                                                if($row['ticket_category'] == $categoryrow['ticket_department_id']){
                                                ?>  
                                                <option selected value="<?php echo $categoryrow['ticket_department_id']; ?>"><?php echo $categoryrow['category_name'] ?></option>
                                                <?php
                                                
                                                }
                                                else
                                                {
                                                  ?>  
                                                <option  value="<?php echo $categoryrow['ticket_department_id']; ?>"><?php echo $categoryrow['category_name'] ?></option>
                                                <?php
                                                }?>
                                            
                                            <?php } ?>
                                       </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputSubject">Subject</label>
                                    <input type="text"class="form-control" style="background: transparent;" id="inputSubject" name="inputSubject" value="<?php echo $row['ticket_short_discrip']; ?>" class="form-control" readonly/>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputMessage">Discription</label>
                                    <textarea id="inputMessage" class="form-control"style="background: transparent;"  name="inputMessage"  rows="4"readonly><?php echo $row['ticket_discription']; ?></textarea>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="../admin/ticket_table_container.php" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                    <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                                </div>
                              </div>