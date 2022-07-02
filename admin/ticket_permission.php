
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4>User Permission</h4>

			<form method="post" action="../admin/ticket_permission_select_container.php">
				<div class="form-group">
					<label>Select User</label>
					<select class="form-control" name="user_id" required>
						<option value="">Select User</option>
						<?php
						require_once '../connect.php';
						$userlistqry="SELECT * from ticket_user where ticket_status='Enable'";
						$userlistres=mysqli_query($conn,$userlistqry);
						while ($userdata=mysqli_fetch_assoc($userlistres)) {
						?>
						<option value="<?php echo $userdata['id'];?>"><?php echo $userdata['ticket_users'];?></option>
					<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" name="permission_update" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>
