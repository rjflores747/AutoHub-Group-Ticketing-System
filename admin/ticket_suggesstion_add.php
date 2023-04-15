<?php
require_once '../connect.php';
if (!isset($_SESSION["id"])) {
  header("Location: index.php");
  exit();
 
}
$message = '';

if(count($_POST)>0) {
  
mysqli_query($conn,"INSERT INTO `ticket_suggestions`(`suggestions_name`, `suggestions_description`, `createdAt`, `suggestions_status`) VALUES ('". $_POST['suggestions_name'] . "','". $_POST['suggestions_description'] ."',NOW(),'1')");


 // Insert visitor activity log into database 
$ActivityLogs = mysqli_query($conn,"INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('".$_SESSION['u_id']."','Updating the Ticket Incident' ,NOW())");


$message = "Record Modified Successfully";

}

?>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h4>List of subject</h4>
			<hr>
			<table id="example1" class="table table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Subject Name</th>
						<th>Suggestion Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
						<?php
						require_once '../connect.php';
						$rolelistqry="SELECT * FROM ticket_suggestions WHERE suggestions_status='1'";
						$rolelistres=mysqli_query($conn,$rolelistqry);
						while ($roledata=mysqli_fetch_assoc($rolelistres)) {
						?>
						<tr>
							<td><?php echo $roledata['id'];?></td>
							<td><?php echo $roledata['suggestions_name'];?></td>
							<td><?php echo $roledata['suggestions_description'];?></td>
							<td>  
							<a href="../admin/ticket_view_suggestion_container.php?id=<?php echo $roledata['id'];?>" class="m-1 btn btn-sm btn-warning btn-icon"><i class="fas fa-eye"></i></a>
        					<a href="../admin/ticket_update_suggestion_container.php?id=<?php echo $roledata['id'];?>" class="m-1 btn btn-sm btn-primary btn-icon"><i class="fas fa-pen"></i></a>
	  							<!-- <a data-action-remove="<?php echo $roledata['id'];?>" style="cursor:pointer;" class="m-1 btn btn-sm btn-danger btn-icon" title="Remove"><i class="fa fa-trash"></i></a> -->
								  <button type="button" class="m-1 btn btn-sm btn-danger btn-icon"  data-id="<?php echo $roledata['id'] ?>" onclick="confirmDelete(this);"><i class="fa fa-trash"></i></button>

</td>
							</tr>
						<?php
						}
						?>
 <div id="myModal" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h4 class="modal-title">Delete User</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
        
                    <div class="modal-body">
                        <p>Are you sure you want to delete this Suggestion ?</p>
                        <form method="POST" action="../admin/function_delete_ticket_sugesstion.php" id="form-delete-user">
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
				</tbody>
			</table>
		</div>

		<div class="col-md-6">
			<h4>Add new subject</h4>
			<hr>
			<!-- <form method="post" action="../admin/ticket_suggesstion_db.php"> -->
			<form name="frmUser" method="post" action="">
				
				<div class="form-group">
					<input type="text" name="suggestions_name" placeholder="Suggestion Name" class="form-control" required/>
				</div>
				<div class="form-group">
					<input type="text" name="suggestions_description" placeholder="Suggestion description" class="form-control" required/>
				</div>
				<div class="form-group">
					<input name="suggestions_submit" class="btn btn-primary" type="submit" value="save record"/>
				</div>
			</form>
		</div>
	</div>
</div>
