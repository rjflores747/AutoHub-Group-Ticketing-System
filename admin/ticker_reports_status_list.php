
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4>Ticket Incident Per Status </h4>
				<div class="card-body">
                    
					<form action="../admin/reports_status_list.php" method="GET">
					<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Status</label>
									<!-- <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control"> -->
									<select class="form-control select2bs4" id="statusText" name="statusText" style="width: 70%;">
                                	<option value="" style="text-align:center">----- SELECT STATUS -----</option>
                                    <?php 
                                      
                                        $query= "SELECT * from ticket_status 
                                        order by ticket_status_name ASC";
                                        $result1= mysqli_query($conn,$query);
                                       
                                        while ($statusrow = mysqli_fetch_array($result1)) { 

                                          if($row['ticket_status'] == $statusrow['ticket_status_id'] ){
                                          ?>  
                                          <option selected value="<?php echo $statusrow['ticket_status_id']; ?>"><?php echo $statusrow['ticket_status_name'] ?></option>
                                          <?php
                                          
                                          }
                                          else
                                          {
                                            ?>  
                                          <option  value="<?php echo $statusrow['ticket_status_id']; ?>"><?php echo $statusrow['ticket_status_name'] ?></option>
                                          <?php
                                          }?>
                         
                                    <?php } ?>
                            </select>
								</div>
							</div><br>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>From Date</label>
									<input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
								</div>
							</div><br>
						</div>
						
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>To Date</label>
									<input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">

							<div class="col-md-4">
								<div class="form-group">
									<!-- <label>Click to Filter</label> <br> -->
								  <button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</div>
					</form>
				</div>
		
					</select>
				</div>
				
				
			</form>
		</div>
	</div>
</div>
