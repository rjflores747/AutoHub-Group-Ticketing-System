<?php 

require_once '../connect.php';

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
  <?php include '../admin/ticket_table_all_incident.php';?>
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
      fnDrawCallback: function () {
        initActionRemove();
        confirmDelete();
      },
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

  

  function confirmDelete(self) {
        var id = self.getAttribute("data-id");
    
        document.getElementById("form-delete-user").id.value = id;
        $("#myModal").modal("show");
    
}
  function initActionRemove() {
    $("[data-action-remove]").each(function () {
      $(this).on("click", function () {
        // const product_id =   $("#example1").DataTable().row(row).data().id;
        //  //$(this).attr('data-action-remove');
        // alert (product_id);

        // return false;
        // var row = $(this).closest("tr");
        var ticket_id = $(this).attr('data-action-remove');

           Swal.fire({
          title: "Are you sure, you want to remove this Ticket?",
          text: "This action cannot be undone.",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, remove it!",
          showClass: {
            backdrop: "swal2-noanimation", // disable backdrop animation
            popup: "", // disable popup animation
            icon: "", // disable icon animation
          },
          hideClass: {
            popup: "", // disable popup fade-out animation
          },
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: "function_delete_ticket_incident.php",
              data: {
                ticket_id: ticket_id, 
              },
              type: "POST",
              dataType: "json",
              beforeSend: function () {
                // toast("info", "Updating...");
              },
              success: function (result) {
                Toast.fire({
                  icon: 'success',
                  title: 'SucesssFul Deleted.',
                  url: 'ticket_myticket_table_container.php'
                }); 
                
                $("#example1").DataTable().ajax.reload();
              },
              error: function () {
                // toast("error", "Error has occurred. Try again.");
              },
            });
          }
        });


        return false;
      
      });
    });
    
  } 
</script>
