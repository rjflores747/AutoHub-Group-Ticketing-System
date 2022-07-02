<?php 

require_once '../connect.php';
  if (isset($_SESSION['username'])) {
  	# database connection file
  	// include '../app/db.conn.php';

  	// include '../app/helpers/user.php';
  	// include '../app/helpers/conversations.php';
    // include '../app/helpers/timeAgo.php';
    // include '../app/helpers/last_chat.php';

  	// # Getting User data data
  	// $user = getUser($_SESSION['username'], $conn);

  	// # Getting User conversations
  	// $conversations = getConversation($user['user_id'], $conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AutoHubGroup | TicketingSystem</title>

  <?php include '../link-required-start.php';?>

</head>
<body class="hold-transition light sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="../img/autohub-logo.png" alt="AutohubLogo" height="60" width="60">
  </div>
<!-- navbar -->
<?php include '../navbar/navbar.php';?>

  <?php include '../navbar/main_sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <br>
  <?php include '../admin/ticket_permission_list.php';?>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <?php include '../navbar/footer.php';?>
</div>
<!-- ./wrapper -->
<!-- link required scripts -->
<?php include '../link-required-scripts-end.php';?>



</body>
</html>
<!-- Page specific script -->
<script>
  //for the deparment to deparment assignment
  $(document).ready(function(){
    $("#tkdepart").change()
      $("#tkdepart").change(function(){
        // alert (   $("#tkdepart").val());
        var tkdepart_id = this.value;
        $.ajax({
        url: "function_update_ticket_incident_ajax.php",
        type: "POST",
        data: {
          tkdepart_id: $("#tkdepart").val()
          // tkdepart_id: tkdepart_id
        },
        cache: false,
        success: function(result1){     
          $("#deptgroup").html(result1);
    
        }
        });    
      });  
    });
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      "buttons": ["colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
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
<?php
  }else{
  	header("Location: index.php");
   	exit;
  }
 ?>