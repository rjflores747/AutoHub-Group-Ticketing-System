<?php

require_once '../connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AutoHubGroup | TicketingSystem</title>

  <?php include '../link-required-start.php'; ?>

</head>

<body class="hold-transition light sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="../img/autohub-logo.png" alt="AutohubLogo" height="60" width="60">
    </div>
    <!-- navbar -->
    <?php include '../navbar/navbar.php'; ?>

    <?php include '../navbar/main_sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <br>
      <?php include '../admin/dashboard.php'; ?>
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <?php include '../navbar/footer.php'; ?>
  </div>
  <!-- ./wrapper -->
  <!-- link required scripts -->
  <?php include '../link-required-scripts-end.php'; ?>



</body>

</html>
<!-- Page specific script -->
<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      "buttons": ["colvis"]
    })
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- 
<script type="text/javascript">
  var ctx = document.getElementById("chartjs_bar").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?php echo json_encode($productname); ?>,
      datasets: [{
        backgroundcolor: [
          "#ffd322",
          "#5945fd",
          "#25d5f2",
          "#2ec551",
          "#ff344e",
        ],
        data: <?php echo json_encode($sales); ?>
      }]
    },
    options: {
      legend: {
        display: true,
        position: 'bottom',
        labels: {
          fontColor: '#71748d',
          fontFamily: 'Circular Std Book',
          fontSize: 14,
        }
      },
    }
  });
</script> -->