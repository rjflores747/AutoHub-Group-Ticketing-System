
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
						$userlistqry="SELECT * from ticket_user where ticket_status='1'";
						$userlistres=mysqli_query($conn,$userlistqry);
						while ($userdata=mysqli_fetch_assoc($userlistres)) {
						?>
						<option value="<?php echo $userdata['id'];?>"><?php echo $userdata['ticket_users'];?></option>
					<?php } ?>
					</select>
				</div>
				<!-- <div class="form-group">
					<div class="checkbox">
						<input type="checkbox" id="5_40_11_1" date-check-ids="5_40_13_1" data-uncheck-ids="" data-access="1" level-one="5" level-two="40" level-three="11" <?php if(isset($hasAccessArray['5']['40']['11'])){ 
							echo (in_array("1",$hasAccessArray['5']['40']['11']))? 'checked' : '';
						}?>>
					</div><span class="mb-0" for="">Create New Ticket</span>
				</div> -->
				<div class="form-group">
					<input type="submit" name="permission_update" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>
