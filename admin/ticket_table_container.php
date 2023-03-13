
<?php 
require_once '../connect.php';


if (!isset($_SESSION["id"])) {
  header("Location: index.php");
  exit();
}
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
  <?php 
  // include '../admin/ticket_support_table.php';
  ?>
  
    <div class="container">
   
          <h4>List of subject</h4>
          <hr>
          <table id="example1" class="table table-bordered">
            <thead>
              <tr>
                <th>Id</th>
                <th>Ticket Number</th>
                <th>Short Discription</th>
                <th>Discription</th>
                <th>Status</th>
                <th>Action </th>
	

              </tr>
            </thead>
            <tbody>
                <?php
                require_once '../connect.php';
              
                $rolelistqry="SELECT * FROM ticket_incident";
                $rolelistres=mysqli_query($conn,$rolelistqry);
                while ($roledata=mysqli_fetch_assoc($rolelistres)) {
                ?>
                <tr>
                  <td><?php echo $roledata['id'];?></td>
                  <td><?php echo $roledata['ticket_number'];?></td>
                  <td><?php echo $roledata['ticket_short_discrip'];?></td>
                  <td><?php echo $roledata['ticket_discription'];?></td>
                 
                  <td>
                    <?php  if ($roledata["ticket_status"] == 1) {
                        echo '<span class="badge badge-primary">In Progress</span>';
                      }else if ($roledata["ticket_status"] == 2){
                        echo '<span class="badge badge-danger">Close</span>';
                      }else if ($roledata["ticket_status"] == 3){
                        echo '<span class="badge badge-success">New</span>' ;
                      } else {
                          echo "Inactive";
                      }
                    ?></td>
                  <td>
                    
                    <a href="../admin/ticket_details_container.php?id=<?php echo $roledata['id'];?>" class="m-1 btn btn-sm btn-warning btn-icon"><i class="fas fa-eye"></i></a>
                  
                    
                  </td>
                  </tr>
                  
                <?php
                }
                ?>
              
            </tbody>
          </table>
      
    </div>

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
