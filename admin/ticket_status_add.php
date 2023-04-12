
<?php
require_once '../connect.php';
if (!isset($_SESSION["id"])) {
  header("Location: index.php");
  exit();
 
}
$message = '';

if(count($_POST)>0) {
  
mysqli_query($conn,"INSERT INTO `ticket_status`(`ticket_status_name`,`status`, `createdAt`) VALUES ('". $_POST['ticket_status_name'] . "','1',NOW())");


 // Insert visitor activity log into database 
$ActivityLogs = mysqli_query($conn,"INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('".$_SESSION['u_id']."','Updating the Ticket Incident' ,NOW())");


$message = "Record Modified Successfully";

}

?>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h4>List of Status</h4>
			<hr>
			<table id="example1" class="table table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Subject Name</th>
						<th>Create</th>

					</tr>
				</thead>
				<tbody>
						<?php
						require_once '../connect.php';
						$rolelistqry="SELECT * FROM ticket_status WHERE status='1'";
						$rolelistres=mysqli_query($conn,$rolelistqry);
						while ($roledata=mysqli_fetch_assoc($rolelistres)) {
						?>
						<tr>
							<td><?php echo $roledata['ticket_status_id'];?></td>
							<td><?php echo $roledata['ticket_status_name'];?></td>
							<td><?php echo $roledata['createdAt'];?></td>
							
							</tr>
						<?php
						}
						?>
					
				</tbody>
			</table>
		</div>

		<div class="col-md-6">
			<h4>Add New Status</h4>
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