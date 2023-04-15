<?php
require_once '../connect.php';
if (!isset($_SESSION["id"])) {
  header("Location: index.php");
  exit();
 
}
$message = '';

if(count($_POST)>0) {
  
mysqli_query($conn,"UPDATE ticket_user set
 id='" . $_POST['update_id'] . "', 
 ticket_fn ='" . $_POST['variable_ticket_fn'] . "', 
 ticket_ln ='" . $_POST['variable_ticket_ln'] . "' ,
 ticket_status ='" . $_POST['variable_ticket_status'] . "',   
 ticket_user_role ='" . $_POST['variable_ticket_role'] . "' 
WHERE id='" . $_POST['update_id'] . "'");


 // Insert visitor activity log into database 
$ActivityLogs = mysqli_query($conn,"INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('".$_SESSION['u_id']."','Updating the Ticket Role' ,NOW())");


// $message = "Record Modified Successfully";

}
// error_reporting(E_ALL);
// ini_set('display_errors',1);
$result = mysqli_query($conn,"SELECT * FROM ticket_user WHERE id='" . $_GET['id'] . "'");
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
                            
        
                                  <!-- text input Caller & State -->
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group row">
                                      <label for="variable_ticket_caller" class="col-sm-2 col-form-label">Employee </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="variable_ticket_employee" name="variable_ticket_employee"value="<?php echo $row['ticket_employee_id']; ?>" placeholder="First name" disabled>
                                      </div>
                                    </div>
                                    </div>
                                    
                                  </div>
                                  <!-- text input Caller & State -->
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group row">
                                      <label for="variable_ticket_caller" class="col-sm-2 col-form-label">First name</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="variable_ticket_fn" name="variable_ticket_fn"value="<?php echo $row['ticket_fn']; ?>" placeholder="First name" >
                                      </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group row">
                                        <label for="inputstate" class="col-sm-2 col-form-label">Last name</label>
                                        <!-- <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputstate"  name="inputstate" value="<?php echo $row['ticket_ln']; ?>" placeholder="State"> -->
                                        <!-- </div> -->
                                        
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="variable_ticket_ln" name="variable_ticket_ln"value="<?php echo $row['ticket_ln']; ?>" placeholder="Last name" >
                                        </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group row">
                                      <label for="variable_ticket_caller" class="col-sm-2 col-form-label">Email</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="variable_ticket_email" name="variable_ticket_email"value="<?php echo $row['ticket_email']; ?>" placeholder="email" disabled>
                                      </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group row">
                                        <label for="inputstate" class="col-sm-2 col-form-label">Status</label>
                                        <!-- <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputstate"  name="inputstate" value="<?php echo $row['ticket_ln']; ?>" placeholder="State"> -->
                                        <!-- </div> -->
                                        
                                        <div class="col-sm-10">
                                          <div class="select2-pur ple">
                                              <select class="form-control select2bs4" id="variable_ticket_status" name="variable_ticket_status" style="width: 100%;" value="<?php echo $row['ticket_status']; ?>">
                                                <option>----- Select Status -----</option>
                                                <option
                                                  <?php 
                                                  if($row['ticket_status'] == "1")
                                                  {
                                                    echo "Selected";
                                                  }?>
                                                  > Active </option>
                                                <option 
                                                <?php 
                                                  if($row['ticket_status'] == "0")
                                                  {
                                                    echo "Selected";
                                                  }?>
                                                  > Deactive </option>
                                              
                                             
                                            </select>
                                          </div>
                                      </div>
                                        </div>
                                      </div>
                                                      <!-- text input Caller & State -->
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group row">
                                      <label for="variable_ticket_caller" class="col-sm-2 col-form-label">Role </label>
                                      <div class="col-sm-10">
                                        <!-- <input type="text" class="form-control" id="variable_ticket_role" name="variable_ticket_role"value="<?php echo $row['ticket_user_role']; ?>" placeholder="First name" > -->
                                        <select class="form-control select2bs4" id="variable_ticket_role" name="variable_ticket_role" style="width: 100%;">
                                                <!-- <option>----- Select CATEGORY -----</option>
                                                <option value="1"> Super Admin </option>
                                                <option value="2"> Manager </option>
                                                <option value="3">Users</option>
                                                
                                            </select> -->
                                            <option  style="text-align:center">----- SELECT ROLE -----</option>
                                    <?php 
                                      
                                        $query= "SELECT * from ticket_role 
                                        order by role_name ASC";
                                        $result1= mysqli_query($conn,$query);
                                       
                                        while ($statusrow = mysqli_fetch_array($result1)) { 

                                          if($row['ticket_user_role'] == $statusrow['role_status'] ){
                                          ?>  
                                          <option selected value="<?php echo $statusrow['role_status']; ?>"><?php echo $statusrow['role_name'] ?></option>
                                          <?php
                                          
                                          }
                                          else
                                          {
                                            ?>  
                                          <option  value="<?php echo $statusrow['role_status']; ?>"><?php echo $statusrow['role_name'] ?></option>
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
                                  <!-- text input Category & Impact -->
                                <div class="modal-footer">
                                    <a href="../admin/ticket_role_add_container.php" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                    <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                                </div>
                              </div>