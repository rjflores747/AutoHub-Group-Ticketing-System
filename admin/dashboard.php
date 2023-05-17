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

            $sql = "select count(*) as total from ticket_incident";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);

            ?>
            <!-- end loading -->
            <div class="inner">
              <h3> <?php
                    echo $data['total'];

                    ?></h3>

              <p>Active Tickets</p>
            </div>
            <div class="icon">
              <i class="fas fa-ticket-alt"></i>
            </div>
            <!-- <a href="../admin/ticket_incident.php" class="small-box-footer">
              More info
              <i class="fas fa-arrow-circle-right"></i>
            </a> -->
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
            $sql = "select count(*) as total from ticket_user";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);

            ?>
            <div class="inner">
              <h3> <?php
                    echo $data['total'];

                    ?><sup style="font-size: 20px"></sup></h3>

              <p>Active Users</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-plus"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a> -->
          </div>
        </div>
        <!-- ./col -->
       
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-danger">
            <!-- Loading (remove the following to stop the loading)
            <div class="overlay dark">
              <i class="fas fa-3x fa-sync-alt"></i>
            </div> -->
            <!-- end loading -->
            <?php
            // require_once '../connect.php';
            $sql = "SELECT count(*) as total  FROM `ticket_incident` WHERE `ticket_status` = '2'";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);

            ?>
            <div class="inner">
            <div class="inner">
              <h3> <?php
                    echo $data['total'];

                    ?>
                <sup style="font-size: 20px"></sup>
              </h3>

              <p>Closed Tickets</p>
            </div>

              <!-- <p>Bounce Rate</p> -->
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
              <i class="fas fa-ticket-alt"></i>

            </div>
            <!-- <a href="#" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a> -->
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-warning">
            <!-- Loading (remove the following to stop the loading)
            <div class="overlay dark">
              <i class="fas fa-3x fa-sync-alt"></i>
            </div> -->
            <!-- end loading -->
            <?php
            // require_once '../connect.php';
            $sql = "SELECT count(*) as total  FROM `ticket_incident` where  ticket_status = '1'  AND  ticket_assign_to ='".$_SESSION['id']."' ";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);

            ?>
            <div class="inner">
            <div class="inner">
              <h3> <?php
                    echo $data['total'];

                    ?>
                <sup style="font-size: 20px"></sup>
              </h3>

              <p>Assigned Tickets</p>
            </div>

              <!-- <p>Bounce Rate</p> -->
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
              <i class="fas fa-ticket-alt"></i>

            </div>
            <!-- <a href="#" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a> -->
          </div>
        </div>
        <!-- ./col -->
     
        
          <!-- <div class="row"> -->
           
              <!-- <div class="card"> -->
                <!-- <div class="car-header bg"> -->
                  <h1><center>Ticket Incident</center>
</h1>
                <!-- </div> -->
                <!-- <div class="card-body"> -->
                <canvas id="myChart"></canvas>  

                <!-- </div> -->
              <!-- </div> -->
              <div class="card">
                <div class="car-header bg">
                  <h1><center>Department</center></h1>
                </div>
                <div class="card-body">
                <canvas id="myChartDepartment"></canvas>  

                </div>
              </div>
            
            <div class="col-md-6 offset-md">
              <div class="card">
                <div class="car-header bg"><br>
                  <h6><center>Level Of Support </center></h6>
                </div>
                <div class="card-body">
                  <canvas id="myChart1"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-6 offset-md">
              <div class="card">
                <div class="car-header bg"><br>
                  <h6><center>Category </center></h6>
                </div>
                <div class="card-body">
                  <canvas id="myChartCategory"></canvas>
                </div>
              </div>
            </div>
          </div>
             
          <?php
                      
                      // Retrieve data from MySQL
                      // $query = "SELECT ticket_status, COUNT(*) as Ticket FROM ticket_incident GROUP BY ticket_status";
                      $query = "SELECT
                      ti.ticket_status,
                      ts.ticket_status_id,
                      ts.ticket_status_name,
                      COUNT(*) AS Ticket
                      FROM
                      ticket_incident AS ti
                      LEFT JOIN ticket_status AS ts
                      ON
                      ti.ticket_status = ts.ticket_status_id
                      GROUP BY
                      ti.ticket_status";
                      $result = mysqli_query($conn, $query);
          
                      // Format data for Chart.js
                      $data = array();
                      while ($row = mysqli_fetch_assoc($result)) {
                          $data[] = array(
                              'label' => $row['ticket_status_name'],
                              'data' => $row['Ticket']
                          );
                      }
                      $data_json = json_encode($data);
          
                      // Create HTML canvas element
                      // echo '<canvas id="myChart"></canvas>';
          
                      // Include Chart.js library
                      echo '<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>';
          
                      // Create JavaScript function to generate chart
                      echo '<script>';
                      echo 'function generateChart(data) {';
                      echo '    var ctx = document.getElementById("myChart").getContext("2d");';
                      echo '    var chart = new Chart(ctx, {';
                      echo '        type: "bar",';
                      echo '        data: {';
                      echo '            labels: data.map(d => d.label),';
                      echo '            datasets: [{';
                      echo '                label: "Number of Ticket",';
                      echo '                data: data.map(d => d.data),';
                      echo '                backgroundColor: "rgb(57, 129, 35) ",';
                      echo '                borderColor: "rgba(0,0,0,0.2)",';
                      echo '                borderWidth: 1';
                      echo '            }]';
                      echo '        },';
                   
                      echo '    });';
                      echo '}';
                      echo '</script>';
          
                      // Call JavaScript function with data
                      echo '<script>generateChart(' . $data_json . ')</script>';
                      ?>
        </div>
      <!-- /.row -->
  </section>
  <!-- /.content -->