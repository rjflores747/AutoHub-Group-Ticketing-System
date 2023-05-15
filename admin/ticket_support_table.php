<div class="container">
   
<h4>Assigned Tickets </h4>
<hr>
          <div class="col-4">
						<div class="btn-group submitter-group ">
							<div class="input-group-prepend">
								<div class="input-group-text">Status</div>
							</div>
							<select class="form-control status-dropdown">
								<option value="">All</option>
								<option value="1">In Progress</option>
								<option value="2">Closed</option>
								<option value="3">New</option>
							
							</select>
						</div>
					</div>
				
<table id="example1" class="table table-bordered">
  <thead>
    <tr>
    <th>Id</th>
      <th>Ticket Number</th>
      <th>Subject</th>
      <th>Description</th>
            <th>Date</th>
      <th>Status</th>
      <th>Action </th>
      <th>Action </th>



    </tr>
  </thead>
  <tbody>
      <?php
      require_once '../connect.php';
    
      $rolelistqry="SELECT * FROM ticket_incident where  ticket_assign_to ='".$_SESSION['id']."'";
      $rolelistres=mysqli_query($conn,$rolelistqry);
      while ($roledata=mysqli_fetch_assoc($rolelistres)) {
      ?>
      <tr>
        <td><?php echo $roledata['id'];?></td>
        <td><?php echo $roledata['ticket_number'];?></td>
        <td><?php echo $roledata['ticket_short_discrip'];?></td>
        <td><?php echo $roledata['ticket_discription'];?></td>
                <td><?php echo $roledata['ticket_timeofdate'];?></td>
       
                <td>
            
            <?php if ($roledata["ticket_status"] == 1) {
              echo '
              <div class="badge status-badge badge-info">
								In Progress
							</div>
						
            <td>1</td>
        ';
            } else if ($roledata["ticket_status"] == 2) {
              echo '
              <div class="badge status-badge badge-danger">
                Closed
              </div>
              
              <td>2</td>
              ';
            } else if ($roledata["ticket_status"] == 3) {
              echo '
              <div class="badge status-badge badge-success">
                New
              </div>
            
            <td>3</td>
              ';
            } else {
              echo "Inactive";
            }
            ?></td>
          <td>

<a href="../admin/ticket_details_container.php?id=<?php echo $roledata['id']; ?>" class="m-1 btn btn-sm btn-warning btn-icon"><i class="fas fa-eye"></i></a>
<a href="../admin/ticket_update_incident_container.php?id=<?php echo $roledata['id']; ?>" class="m-1 btn btn-sm btn-primary btn-icon"><i class="fas fa-pen"></i></a>

<?php
if ($_SESSION['ticket_user_role'] == '1' || $_SESSION['ticket_user_role'] == '2') { ?>
  <?php if ($roledata['ticket_status'] == '2') { ?>

    <button type="button" class="m-1 btn btn-sm btn-danger btn-icon" data-id="<?php echo $roledata['id'] ?>" onclick="confirmDelete(this);" disabled><i class="fa fa-trash"></i></button>
  <?php } ?>
  <?php if ($roledata['ticket_status'] == '1' || $roledata['ticket_status'] == '3') { ?>
    <button type="button" class="m-1 btn btn-sm btn-danger btn-icon" data-id="<?php echo $roledata['id'] ?>" onclick="confirmDelete(this);"><i class="fa fa-trash"></i></button>
  <?php } ?>
<?php } ?>
<!-- <a data-action-remove="<?php echo $roledata['id']; ?>" style="cursor:pointer;" class="m-1 btn btn-sm btn-danger btn-icon" title="Remove"><i class="fa fa-trash"></i></a> -->
<!-- <button type="button" class="btn btn-danger btn-icon" data-toggle="modal" data-target="#myModal" data-id="<?php echo $roledata['id']; ?>" onclick="confirmDelete(this);"><i class="fa fa-trash"></i></button> -->
<!-- <button type="button" class="btn btn-danger" data-id="<?php echo $roledata['id']; ?>" onclick="confirmDelete(this);">Delete</button> -->

</td>
        </tr>
        <div id="myModal" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h4 class="modal-title">Delete User</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
        
                    <div class="modal-body">
                        <p>Are you sure you want to delete this Ticket ?</p>
                        <form method="POST" action="../admin/function_delete_ticket_incident.php" id="form-delete-user">
                            <input type="hidden" name="id">
                        </form>
                    </div>
        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" form="form-delete-user" class="btn btn-danger">Delete</button>
                    </div>
        
                </div>
            </div>
        </div>
      <?php
      }
      ?>
    
  </tbody>
</table>

</div>
