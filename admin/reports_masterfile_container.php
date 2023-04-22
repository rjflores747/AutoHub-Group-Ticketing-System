
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4>Reports List</h4>
			<div class="card-body">
                    
					<form action="../admin/reports_masterfile.php" method="GET">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>From Date</label>
									<input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control" require>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>To Date</label>
									<input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control" require>
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
			</form>
		</div>
	</div>
</div>
