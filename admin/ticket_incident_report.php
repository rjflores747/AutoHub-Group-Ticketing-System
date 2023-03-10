
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Contact us</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body>
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
            <div class="preloader flex-column justify-content-center align-items-center">
              <img class="animation__shake" src="../img/AUTOHUB.png" alt="AdminLTELogo" height="60" width="60">
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
                  <label for="inputSubject">Subject</label>
                  <input type="text" id="inputSubject" name="inputSubject" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="inputMessage">Message</label>
                  <textarea id="inputMessage" class="form-control" name="inputMessage" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary" name="submit" value="Send message">
                </div>
            </form>
          </div>
        </div>



    <!-- /.content -->

  <!-- /.content-wrapper -->
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
