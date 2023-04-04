
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4>Department Reports List</h4>
			<div class="card-body">
                    
					<form action="../admin/reports_department_list.php" method="GET">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>From Date</label>
									<input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control"required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>To Date</label>
									<input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control"required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Click to Filter</label> <br>
								  <button type="submit" class="btn btn-primary">Filter</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			<!-- <form method="post" action="../admin/ticket_permission_select_container.php">
				<div class="form-group">
					<label>Select User</label>
					<select class="form-control" name="user_id" required>
						<option value="">Select User</option> -->
						<?php
						// require_once '../connect.php';
						// $userlistqry="SELECT * from ticket_user where ticket_status='1'";
						// $userlistres=mysqli_query($conn,$userlistqry);
						// while ($userdata=mysqli_fetch_assoc($userlistres)) {
						?>
						<!-- <option value="<?php echo $userdata['id'];?>"><?php echo $userdata['ticket_users'];?></option> -->
					<?php
					//  }

					 ?>
					</select>
				</div>
				
			</form>
		</div>
	</div>
</div>
