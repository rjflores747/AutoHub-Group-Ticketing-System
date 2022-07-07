
<?php 
require_once '../connect.php';

if (isset($_GET['id'])) {
$lastId = $_GET['id'];

// $user_id=$_POST['user_id'];
$trp_query="SELECT
							ticket_role.id AS role_id,
							ticket_permission.id AS permission_id,
							ticket_role_permission.id
							
						FROM
							ticket_role_permission
						LEFT OUTER JOIN ticket_role ON ticket_role_permission.role_id = ticket_role.id
						LEFT OUTER JOIN ticket_permission ON ticket_role_permission.permission_id = ticket_permission.id
						WHERE
							ticket_role.id = '$lastId' AND ticket_permission.id = '%s';";
}
?>	



<div class="container">
<div class="row">
<div class="col-md-12">
<h4>User Permission</h4>

<form method="post" action="../admin/ticket_permission_db.php">
<input type="hidden" name="user_id" value="<?php echo $lastId;?>">
<table class="table">
<thead>
<tr>
<th>Module</th>
<th>Function</th>
<th>Permission</th>
</tr>
</thead>
<tbody>
	<!-- Ticket view Function  -->
	<td>TICKET</td>
	<td>Ticket View</td>
	<td>   
				<div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <select id="1" class="custom-select">
							<?php 
							// get data form database and inner join 
							$query=sprintf($trp_query,'1');
							// echo $query;
							// exit;
							$queryresult=mysqli_query($conn,$query);
							$count = 0;
							while ($row=mysqli_fetch_assoc($queryresult)) {
							$count ++;
							}
							$options = ' <option %s value="1">True</option></option>
							<option %s value="0">False</option>
							';
							if($count>0){
								echo sprintf($options,'selected', '');
							}else{
								echo sprintf($options,'', 'selected');
							}
							?>
                        </select>
                      </div>
                    </div>
				</td>
			<tr>
		
			<!-- Ticket view Function  -->
			<td>TICKET</td>
			<td>Ticket Detail</td>
			<td>   
				<div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <select id="1" class="custom-select">
							<?php 
							// get data form database and inner join 
							$query=sprintf($trp_query,'9');
							// echo $query;
							// exit;
							$queryresult=mysqli_query($conn,$query);
							$count = 0;
							while ($row=mysqli_fetch_assoc($queryresult)) {
							$count ++;
							}
							$options = ' <option %s value="1">True</option></option>
							<option %s value="0">False</option>
							';
							if($count>0){
								echo sprintf($options,'selected', '');
							}else{
								echo sprintf($options,'', 'selected');
							}
							?>
                        </select>
                      </div>
                    </div>
				</td>
			<tr>
			<!-- Ticket add Function  -->
			<td>TICKET</td>
				<td>Ticket Add</td>
				<td>   
					<div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <select id="1" class="custom-select">
							<?php 
							// get data form database and inner join 
							$query=sprintf($trp_query,'2');
							// echo $query;
							// exit;
							$queryresult=mysqli_query($conn,$query);
							$count = 0;
							while ($row=mysqli_fetch_assoc($queryresult)) {
							$count ++;
							}
							$options = ' <option %s value="1">True</option></option>
							<option %s value="0">False</option>
							';
							if($count>0){
								echo sprintf($options,'selected', '');
							}else{
								echo sprintf($options,'', 'selected');
							}
							?>
                        </select>
                      </div>
                    </div>
				</td>
				</tr>

					<tr>	
					<!-- Ticket update Function  -->
					<td>TICKET</td>
						<td>Ticket Update</td>
						<td>   
							<div class="col-sm-6">
							<!-- select -->
							<div class="form-group">
								<select id="1" class="custom-select">
									<?php 
									// get data form database and inner join 
									$query=sprintf($trp_query,'3');
									// echo $query;
									// exit;
									$queryresult=mysqli_query($conn,$query);
									$count = 0;
									while ($row=mysqli_fetch_assoc($queryresult)) {
									$count ++;
									}
									$options = ' <option %s value="1">True</option></option>
									<option %s value="0">False</option>
									';
									if($count>0){
										echo sprintf($options,'selected', '');
									}else{
										echo sprintf($options,'', 'selected');
									}
									?>
								</select>
							</div>
							</div>
						</td>
					</tr>

					<tr>
						<!-- Ticket Delete Function  -->
						<td>TICKET</td>
							<td>Ticket Delete</td>
							<td>   
								<div class="col-sm-6">
								<!-- select -->
								<div class="form-group">
									<select id="1" class="custom-select">
										<?php 
										// get data form database and inner join 
										$query=sprintf($trp_query,'4');
										// echo $query;
										// exit;
										$queryresult=mysqli_query($conn,$query);
										$count = 0;
										while ($row=mysqli_fetch_assoc($queryresult)) {
										$count ++;
										}
										$options = ' <option %s value="1">True</option></option>
										<option %s value="0">False</option>
										';
										if($count>0){
											echo sprintf($options,'selected', '');
										}else{
											echo sprintf($options,'', 'selected');
										}
										?>
									</select>
								</div>
								</div>
							</td>
					</tr>

					<tr>
						<!-- User View Function  -->
						<td>User</td>
							<td>User View</td>
							<td>   
								<div class="col-sm-6">
								<!-- select -->
								<div class="form-group">
									<select id="1" class="custom-select">
										<?php 
										// get data form database and inner join 
										$query=sprintf($trp_query,'5');
										// echo $query;
										// exit;
										$queryresult=mysqli_query($conn,$query);
										$count = 0;
										while ($row=mysqli_fetch_assoc($queryresult)) {
										$count ++;
										}
										$options = ' <option %s value="1">True</option></option>
										<option %s value="0">False</option>
										';
										if($count>0){
											echo sprintf($options,'selected', '');
										}else{
											echo sprintf($options,'', 'selected');
										}
										?>
									</select>
								</div>
								</div>
							</td>
					</tr>
					<tr>
						<!-- User Add Function  -->
						<td>User</td>
							<td>User Add</td>
							<td>   
								<div class="col-sm-6">
								<!-- select -->
								<div class="form-group">
									<select id="1" class="custom-select">
										<?php 
										// get data form database and inner join 
										$query=sprintf($trp_query,'6');
										// echo $query;
										// exit;
										$queryresult=mysqli_query($conn,$query);
										$count = 0;
										while ($row=mysqli_fetch_assoc($queryresult)) {
										$count ++;
										}
										$options = ' <option %s value="1">True</option></option>
										<option %s value="0">False</option>
										';
										if($count>0){
											echo sprintf($options,'selected', '');
										}else{
											echo sprintf($options,'', 'selected');
										}
										?>
									</select>
								</div>
								</div>
							</td>
					</tr>
					
					<tr>
						<!-- User Update Function  -->
						<td>User</td>
							<td>User Update</td>
							<td>   
								<div class="col-sm-6">
								<!-- select -->
								<div class="form-group">
									<select id="1" class="custom-select">
										<?php 
										// get data form database and inner join 
										$query=sprintf($trp_query,'7');
										// echo $query;
										// exit;
										$queryresult=mysqli_query($conn,$query);
										$count = 0;
										while ($row=mysqli_fetch_assoc($queryresult)) {
										$count ++;
										}
										$options = ' <option %s value="1">True</option></option>
										<option %s value="0">False</option>
										';
										if($count>0){
											echo sprintf($options,'selected', '');
										}else{
											echo sprintf($options,'', 'selected');
										}
										?>
									</select>
								</div>
								</div>
							</td>
					</tr>
					<tr>
						<!-- User Delete Function  -->
						<td>User</td>
							<td>User Delete</td>
							<td>   
								<div class="col-sm-6">
								<!-- select -->
								<div class="form-group">
									<select id="1" class="custom-select">
										<?php 
										// get data form database and inner join 
										$query=sprintf($trp_query,'8');
										// echo $query;
										// exit;
										$queryresult=mysqli_query($conn,$query);
										$count = 0;
										while ($row=mysqli_fetch_assoc($queryresult)) {
										$count ++;
										}
										$options = ' <option %s value="1">True</option></option>
										<option %s value="0">False</option>
										';
										if($count>0){
											echo sprintf($options,'selected', '');
										}else{
											echo sprintf($options,'', 'selected');
										}
										?>
									</select>
								</div>
								</div>
							</td>
					</tr>

					<tr>
						<!-- User role Function  -->
						<td>Configuration </td>
							<td>User Role</td>
							<td>   
								<div class="col-sm-6">
								<!-- select -->
								<div class="form-group">
									<select id="1" class="custom-select">
										<?php 
										// get data form database and inner join 
										$query=sprintf($trp_query,'10');
										// echo $query;
										// exit;
										$queryresult=mysqli_query($conn,$query);
										$count = 0;
										while ($row=mysqli_fetch_assoc($queryresult)) {
										$count ++;
										}
										$options = ' <option %s value="1">True</option></option>
										<option %s value="0">False</option>
										';
										if($count>0){
											echo sprintf($options,'selected', '');
										}else{
											echo sprintf($options,'', 'selected');
										}
										?>
									</select>
								</div>
								</div>
							</td>
					</tr>

					<tr>
						<!-- User permission Function  -->
						<td>User</td>
							<td>User Permission</td>
							<td>   
								<div class="col-sm-6">
								<!-- select -->
								<div class="form-group">
									<select id="1" class="custom-select">
										<?php 
										// get data form database and inner join 
										$query=sprintf($trp_query,'11');
										// echo $query;
										// exit;
										$queryresult=mysqli_query($conn,$query);
										$count = 0;
										while ($row=mysqli_fetch_assoc($queryresult)) {
										$count ++;
										}
										$options = ' <option %s value="1">True</option></option>
										<option %s value="0">False</option>
										';
										if($count>0){
											echo sprintf($options,'selected', '');
										}else{
											echo sprintf($options,'', 'selected');
										}
										?>
									</select>
								</div>
								</div>
							</td>
					</tr>
</tbody>
</table>
<input type="submit" name="permissionsubmit" class="btn btn-primary" value="Update">
</form>
</div>
</div>
</div>
<?php include '../navbar/footer.php';?>
