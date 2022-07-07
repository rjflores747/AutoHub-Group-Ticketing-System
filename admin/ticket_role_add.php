
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h4>Role List</h4>
			<hr>
			<table class="table table-bordered">
			<table id="example1" class="table table-bordered table-striped">
                 
				
				<!-- <thead>
					<tr>
						<th>id</th>
						<th>Role Name</th>
						<th>Role Status</th>
						<th>action</th>

					</tr>
				</thead>
				<tbody>
						<?php
						// require_once '../connect.php';
						// $rolelistqry="SELECT * FROM ticket_role";
						// $rolelistres=mysqli_query($conn,$rolelistqry);
						// while ($roledata=mysqli_fetch_assoc($rolelistres)) {
						// ?>
						<tr>
							<td><php echo $roledata['id'];?></td>
							<td><php echo $roledata['role_name'];?></td>
							<td><php echo $roledata['role_status'];?></td>
							</tr>
						<php
						}
						?>
					
				</tbody> -->
			</table>
		</div>

		<div class="col-md-6">
			<h4>Role Add</h4>
			<hr>
			<form method="post" action="../admin/ticket_role_db.php">
		
				<div class="form-group">
					<input type="text" name="Role_name" placeholder="Role Name" class="form-control" />
				</div>
				<div class="form-group">
					<input type="text" name="Role_status" placeholder="Role Status" class="form-control" />
				</div>
				<div class="form-group">
					<input name="Role_submit" class="btn btn-primary" type="submit" value="Add Role"/>
				</div>
			</form>
		</div>
	</div>
</div>
