<?php
require_once '../connect.php';
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
 ticket_assign_group='" . $_POST['deptgroup'] . "', 
 ticket_assign_to='' ,
 ticket_department_id='" . $_POST['tkdepart'] . "'WHERE id='" . $_POST['update_id'] . "'");


 // Insert visitor activity log into database 
$ActivityLogs = mysqli_query($conn,"INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('".$_SESSION['u_id']."','Updating the Ticket Incident' ,NOW())");

$message = "Record Modified Successfully";

}
$result = mysqli_query($conn,"SELECT * FROM ticket_incident WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>

<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } 
?>
</div>
<div style="padding-bottom:5px;">
<!-- <a href="retrieve.php">Employee List</a> -->
  <div class="modal-body">
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
                                    <label for="variable_ticket_caller" class="col-sm-2 col-form-label">Caller</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="variable_ticket_caller" name="variable_ticket_caller"value="<?php echo $row['ticket_caller']; ?>" placeholder="Caller" disabled>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                      <label for="inputstate" class="col-sm-2 col-form-label">State</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputstate"  name="inputstate"value="<?php echo $row['ticket_status']; ?>" placeholder="State">
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
                                                  if($row['ticket_category'] == $categoryrow['id'] ){
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
                                      <label for="tkdepart" class="col-sm-2 col-form-label">Deparment</label>
                                      <div class="col-sm-10">
                                         <div class="select2-purple">
                                          <select class="form-control select2bs4" id="tkdepart" name="tkdepart" style="width: 100%;">
                                            <option>----- NONE DEPARMENT -----</option>
                                              <?php 
                                              
                                                $query= "select * from ticket_deparment order by ticket_dept_name ASC";
                                                $result1= mysqli_query($conn,$query);
                                                
                                                while ($departmentrow= mysqli_fetch_array($result1)) { 

                                                  if($row['ticket_department_id'] == $departmentrow['id'] ){
                                                  ?>  
                                                  <option selected value="<?php echo $departmentrow['id']; ?>"><?php echo $departmentrow['ticket_dept_name'] ?></option>
                                                  <?php
                                                  
                                                  }
                                                  else
                                                  {
                                                    ?>  
                                                  <option  value="<?php echo $departmentrow['id']; ?>"><?php echo $departmentrow['ticket_dept_name'] ?></option>
                                                  <?php
                                                  }?>
                                              
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
                                      <label for="inputPriority" class="col-sm-2 col-form-label">Assignment Group</label>
                                      <div class="col-sm-10">
                                      <!-- <input type="text" class="form-control" id="inputdepartment" name="inputdepartment" value="<?php echo $row['ticket_assign_group']; ?>" /> -->
                                      <div class="select2-purple">
                                      <select class="select2" id="deptgroup" name="deptgroup" multiple="multiple" data-placeholder="Select a Assignment" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                       <option >----- NONE DEPARMENT -----</option>
                                  
                                  </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputSubject">Subject</label>
                                    <input type="text"class="form-control" id="inputSubject" name="inputSubject" value="<?php echo $row['ticket_short_discrip']; ?>" class="form-control" />
                                  </div>
                                  <div class="form-group">
                                    <label for="inputMessage">Message</label>
                                    <textarea id="inputMessage" class="form-control" name="inputMessage"  rows="4"><?php echo $row['ticket_discription']; ?></textarea>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="../admin/ticket_table_container.php" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                    <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                                </div>
                              </div>