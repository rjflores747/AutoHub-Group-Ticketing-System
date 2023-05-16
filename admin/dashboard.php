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
            <div class="col-md-12 offset-md">
              <div class="card">
                <div class="car-header bg">
                  <h1><center>Ticket Incident</center>
</h1>
                </div>
                <div class="card-body">
                <canvas id="myChart"></canvas>  

                </div>
              </div>
              <div class="card">
                <div class="car-header bg">
                  <h1><center>Department</center></h1>
                </div>
                <div class="card-body">
                <canvas id="myChartDepartment"></canvas>  

                </div>
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
           
            // Include Chart.js library
              // require_once('path/to/chart.min.js');

              // Retrieve data from the database
              // $host = 'localhost';
              // $db = 'autohub-ticketing';
              // $user = 'root';
              // $password = '';
              $host = "ticketing-system.adrianpusana.com";
              $user = "syofdjax_alberto_flores";
              $password = "v,O@0OngL;}g";
              $db ="syofdjax_ticketing";
              // $servername = "localhost";
              // $username = "root";
              // // // $username = "autoph_helpdesk";
              // // // $password = "AGc@2023#$@help@";
              // $password = "";
              // $db ="autohub-ticketing";
              // Establish a database connection
              $connection = new PDO("mysql:host=$host;dbname=$db", $user, $password);

              // Execute a query to retrieve data
              $query = "SELECT
              ti.ticket_department_id,
              td.ticket_dept_source_id,
              td.ticket_dept_name,
              COUNT(*) AS Ticket
          FROM
              ticket_incident AS ti
          LEFT JOIN ticket_deparment AS td
          ON
              ti.ticket_department_id = td.ticket_dept_source_id
          GROUP BY
              ti.ticket_department_id
          ORDER BY
              `td`.`ticket_dept_source_id` ASC";

              $stmt = $connection->query($query);

              // Fetch the result set
              $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

              // Close the database connection
              $connection = null;
            // Build the dataset array for the graph
            $dataset = array(
              'labels' => array(),
              'datasets' => array(
                  array(
                      'label' => 'Data',
                      'data' => array(),
                      'backgroundColor' => array()
                  )
              )
            );

          // Generate random colors for each data point
          $colorCount = count($data);
          $randomColors = generateRandomColorDepartment($colorCount);

          // Iterate over the fetched data
          foreach ($data as $index => $row) {
            // Extract values
            $label = $row['ticket_dept_name'];
            $dataValue = $row['Ticket'];

            // Add values to the dataset array
            $dataset['labels'][] = $label;
            $dataset['datasets'][0]['data'][] = $dataValue;
            $dataset['datasets'][0]['backgroundColor'][] = $randomColors[$index];
          }

          // Function to generate random colors
          function generateRandomColorDepartment($count)
          {
            $colors = array();

            for ($i = 0; $i < $count; $i++) {
                $red = rand(0, 255);
                $green = rand(0, 255);
                $blue = rand(0, 255);
                $colors[] = "rgb($red, $green, $blue)";
            }

            return $colors;
          }

          // Generate the chart
          echo '<canvas id="myChartDepartment"></canvas>';

          // JavaScript code to render the chart
          echo '<script>';
          echo 'var ctx = document.getElementById("myChartDepartment").getContext("2d");';
          echo 'var myChart = new Chart(ctx, {';
          echo '    type: "bar",';
          echo '    data: ' . json_encode($dataset) . ',';
          echo '    options: {}';
          echo '});';
          echo '</script>';
            ?>
        </div>
      <!-- /.row -->
  </section>
  <!-- /.content -->