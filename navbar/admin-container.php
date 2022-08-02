<?php 
  //  if(isset($_SESSION['ticket_user_role']) && $_SESSION['ticket_user_role']!='1'){
  //   header('location: index.php');
  //   die();
    if (!isset($_SESSION["id"])) {
      header("Location: index.php");
      exit();
    }
// }
 ?>
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        
        <!-- Info boxes -->
        <div class="row">
          
          <!-- /.content-wrapper -->
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
            <div class="preloader flex-column justify-content-center align-items-center">
              <img class="animation__shake" src="../img/autohub-logo.png" alt="AdminLTELogo" height="60" width="60">
            </div>
              <h1><b>AutoHub<strong></b></strong></h1>
              <h1>Ticketing<strong>System</strong></h1>
              <p class="lead mb-5">THE SOLUTION OF YOUR PROBLEMS 
                <!-- Ford, Blk 15, Rizal Dr, Crescent Park West, Taguig, 1634 Metro Manila<br>
                Phone: +63 917 528 4442  -->
              </p>  
            </div>
          </div>
          <div class="col-7">
            <!-- <form action="../admin/function_create_ticket_incident.php" method="POST"> -->
                <div class="form-group">
                  <label for="inputeparment">Department</label>
                   <select class="form-control select2bs4"  name="inputeparment" id="inputeparment" style="width: 100%;" require>
                              <option value="" require>----- Select Department -----</option>
                              <?php
                              $array_data ['uri'] = 'https://autohub.ph/connect/api/v1/asa/api.php';
                              $array_data['parameters'] = http_build_query(array('key'=>'99799116300681219'));
                               
                                $result = Utility::curl($array_data);
                                $department_array = json_decode($result,true);
                                foreach($department_array as $row1)
                                {
                                  ?>

                                  <option value="<?php echo $row1['id']?>">
                                  <?php echo $row1['dept_name'];?>
                                </option>
                                  <?php 

                                }
                                   ?>
                              </select>
                  <!-- <input type="text" id="inputeparment" name="inputeparment" class="form-control" /> -->
                </div>
                
                <div class="form-group">
                  <label for="inputSubject">Subject</label>
                  <input type="text" id="inputSubject" name="inputSubject" class="form-control"require />
                </div>
                <div class="form-group">
                  <label for="inputMessage">Discription</label>
                  <textarea id="inputMessage" class="form-control" name="inputMessage" rows="4"require></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" id="button-send-message-details"  class="btn btn-primary" name="submit" value="Send message">
                </div>
            <!-- </form> -->
          </div>
        </div>
        </div>
        <!-- /.row -->

        
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
