<?php 
require_once '../connect.php';


if (!isset($_SESSION["email"])) {
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
       <!-- Content Header (Page header) -->
  <!-- <php include '../navbar/content-header.php';> -->
            <!-- Main Content-->
  <?php include '../navbar/admin-Container.php';?>
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

<script>
          var Toast = null;
            // global variable
          $(function() {
            Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000
            });
            $('#button-send-message-details').on('click', function(){ 
          // alert ($('#inputSubject').val());
          // // alert(1);
          // return;
            //variable
            var variable_department = $('#inputeparment').val();
            var variable_subject = $('#inputSubject').val();
            var variable_message = $('#inputMessage').val();


          // REQUIREMENTS
          if(variable_department == ""){
            toastr.remove();
            toastr.error("Department cannot be empty", "Incomplete data");

            return;
          }
          if(variable_subject == ""){
            toastr.remove();
            toastr.error("Subject cannot be empty", "Incomplete data");

            return;
          }
          if(variable_message == ""){
            toastr.remove();
            toastr.error("Message cannot be empty", "Incomplete data");

            return;
          }
          // Login Validation
          $.ajax({
              url:"function_create_ticket_incident.php",  
              type:"POST", 
              dataType:"json",
              data: {
                  var_department: variable_department, 
                  var_subject: variable_subject, 
                  var_message: variable_message, 
                  type: 1 // login status
              },
              beforeSend: function(){
                  // $('#loading-view').attr('hidden', false);
                  $('.el-log').attr('disabled', true);
              },
                  
              success: function(result){
            // alert(result.status);
                  if(result.status == 1){ // success
                      toastr.remove();
                      toastr.success("Login successfully");
                      window.location.href='ticket_details_container.php?id='+result.id;
                      // $('#modal-finance-add-fni').modal('hide');
                      // $('#loading-view').attr('hidden', true);
                      // $('.el-add').attr('disabled', false);

                      // refreshFinanceTable();
                      // detailsCount();
                      // clearElements();
                  } 
                  // else if(result.status == 0){ // failed add
                      // $('#loading-view').attr('hidden', true);
                      // $('.el-add').attr('disabled', false);

              //         toastr.remove();
              //         toastr.error("No Record Found");
              // return;
              //     } 
              //     else if(result.status == 2){ // dealer validation error
              //         // $('#loading-view').attr('hidden', true);
              //         // $('.el-add').attr('disabled', false);

              //         toastr.remove();
              //         toastr.error("Wrong Credentials");
              // return;
              //     } 
              
              }
          })

        });
      })
</script>