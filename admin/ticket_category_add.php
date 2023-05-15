
<?php
require_once '../connect.php';
if (!isset($_SESSION["id"])) {
  header("Location: index.php");
  exit();
 
}
$message = '';

if(count($_POST)>0) {
  
// mysqli_query($conn,"INSERT INTO `ticket_status`(`ticket_status_name`,`status`, `createdAt`) VALUES ('". $_POST['ticket_status_name'] . "','1',NOW())");
mysqli_query($conn,"INSERT INTO `ticket-category`(`category_name`, `category_date`) VALUES ('". $_POST['ticket_status_name'] . "',NOW())");

 // Insert visitor activity log into database 
$ActivityLogs = mysqli_query($conn,"INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('".$_SESSION['ticket_employee_id']."','Updating the Ticket Incident' ,NOW())");


$message = "Record Modified Successfully";

}

?>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h4>List of Category</h4>
			<hr>
			<table id="example1" class="table table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Category Name</th>
						<th>Date</th>
						<th>Action</th>

					</tr>
				</thead>
				<tbody>
						<?php
						require_once '../connect.php';
						$rolelistqry="SELECT * FROM `ticket-category`";
						$rolelistres=mysqli_query($conn,$rolelistqry);
						while ($roledata=mysqli_fetch_assoc($rolelistres)) {
						?>
						<tr>
							<td><?php echo $roledata['id'];?></td>
							<td><?php echo $roledata['category_name'];?></td>
							<td><?php echo $roledata['category_date'];?></td>
							<td>  
								<a href="../admin/ticket_view_status_container.php?id=<?php echo $roledata['id'];?>" class="m-1 btn btn-sm btn-warning btn-icon"><i class="fas fa-eye"></i></a>
								<a href="../admin/ticket_update_status_container.php?id=<?php echo $roledata['id'];?>" class="m-1 btn btn-sm btn-primary btn-icon"><i class="fas fa-pen"></i></a>
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
									<h4 class="modal-title">Delete Category</h4>
									<button type="button" class="close" data-dismiss="modal">×</button>
								</div>
					
								<div class="modal-body">
									<p>Are you sure you want to delete this Status ?</p>
									<form method="POST" action="../admin/function_delete_ticket_status.php" id="form-delete-user">
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
			<h4>Add New Category</h4>
			<hr>
			<!-- <form method="post" action="../admin/ticket_status_db.php"> -->
			<form name="frmUser" method="post" action="">

				<div class="form-group">
					<input type="text" name="ticket_status_name" placeholder="Name" class="form-control" required/>
				</div>
                <div class="form-group">
					<input name="suggestions_submit" class="btn btn-primary" type="submit" value="save record" required/>
				</div>
			</form>
		</div>
	</div>
</div>