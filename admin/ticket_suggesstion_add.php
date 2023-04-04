
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
						<th>Suggesstion Status</th>

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
							
							</tr>
						<?php
						}
						?>
					
				</tbody>
			</table>
		</div>

		<div class="col-md-6">
			<h4>Add new subject</h4>
			<hr>
			<form method="post" action="../admin/ticket_suggesstion_db.php">
				<div class="form-group">
					<input type="text" name="suggestions_name" placeholder="suggestions Name" class="form-control" />
				</div>
				<div class="form-group">
					<input type="text" name="suggestions_description" placeholder="suggestions description" class="form-control" />
				</div>
				<div class="form-group">
					<input name="suggestions_submit" class="btn btn-primary" type="submit" value="save record"/>
				</div>
			</form>
		</div>
	</div>
</div>