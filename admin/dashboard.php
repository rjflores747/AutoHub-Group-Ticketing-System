  <?
require_once '../connect.php';

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
              <a href="../admin/ticket_incident.php" class="small-box-footer">
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
    </section>
    <!-- /.content -->
    