<?php 
  //  if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
  //   header('location: index.php');
  //   die();
    if (!isset($_SESSION["email"])) {
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
              <p class="lead mb-5"> Ford, Blk 15, Rizal Dr, Crescent Park West, Taguig, 1634 Metro Manila<br>
                Phone: +63 917 528 4442 
              </p>  
            </div>
          </div>
          <div class="col-7">
            <form action="../admin/function_create_ticket_incident.php" method="POST">
                <div class="form-group">
                  <label for="inputeparment">Department</label>
                   <select class="form-control select2bs4"  name="inputeparment" style="width: 100%;" require>
                              <option value="" require>----- NONE -----</option>
                              <?php
                             
                                $querydeparment = "SELECT * FROM `ticket_deparment`";
                                $resultdeparment = mysqli_query($conn,$querydeparment);
                                    while ($row1 = mysqli_fetch_array($resultdeparment)):;?>
                                    <option value="<?php echo $row1['id']?>"><?php echo $row1['ticket_dept_name'];?></option>
                                    <?php endwhile; ?>
                             
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
                  <input type="submit" class="btn btn-primary" name="submit" value="Send message">
                </div>
            </form>
          </div>
        </div>
        </div>
        <!-- /.row -->

        
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->