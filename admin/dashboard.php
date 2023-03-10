  <?
require_once '../connect.php';
  if (!isset($_SESSION["id"])) {
    header("Location: index.php");
    exit();
   
  }
  ?>
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <!-- Small Box (Stat card) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <!-- Loading (remove the following to stop the loading)-->
              <!-- <div class="overlay">
                <i class="fas fa-3x fa-sync-alt"></i>
              </div> -->
              
              <?php
   
                $sql="select count(*) as total from ticket_incident";
                $result=mysqli_query($conn,$sql);
                $data=mysqli_fetch_assoc($result);
              
                ?>
              <!-- end loading -->
              <div class="inner">
                <h3>   <?php 
                 echo $data['total'];
               
                  ?></h3>

                <p>Incident</p>
              </div>
              <div class="icon">
                <i class="fas fa-ticket-alt"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info 
                <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <!-- Loading (remove the following to stop the loading)-->
              <!-- <div class="overlay dark">
                <i class="fas fa-3x fa-sync-alt"></i>
              </div> -->
              <!-- end loading -->
              <?php
                // require_once '../connect.php';
                $sql="select count(*) as total from ticket_user";
                $result=mysqli_query($conn,$sql);
                $data=mysqli_fetch_assoc($result);
              
                ?>
              <div class="inner">
                <h3>  <?php 
                 echo $data['total'];
               
                  ?><sup style="font-size: 20px">%</sup></h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <!-- Loading (remove the following to stop the loading)-->
              <!-- <div class="overlay dark">
                <i class="fas fa-3x fa-sync-alt"></i>
              </div> -->
              <!-- end loading -->
              <?php
                // require_once '../connect.php';
                $sql="select count(*) as total from ticket_deparment ";
                $result=mysqli_query($conn,$sql);
                $data=mysqli_fetch_assoc($result);
              
                ?>
              <div class="inner">
                <h3>  <?php 
                 echo $data['total'];
               
                  ?>
                  <sup style="font-size: 20px">%</sup></h3>

                <p>Department</p>
              </div>
              <div class="icon">
              
              <i class="fas fa-building"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <!-- Loading (remove the following to stop the loading)-->
              <div class="overlay dark">
                <i class="fas fa-3x fa-sync-alt"></i>
              </div>
              <!-- end loading -->
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="container-fluid">
			<!-- <div class="row">
				<div class="col-md-4">
					<div class="card mt-4">
						<div class="card-header">Pie Chart</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="pie_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mt-4">
						<div class="card-header">Doughnut Chart</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="doughnut_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mt-4 mb-4">
						<div class="card-header">Bar Chart</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div> -->
 <!-- DONUT CHART
 <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Donut Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            <!-- </div> -->
            <!-- /.card -->
<??>
        <!-- --> 
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
    