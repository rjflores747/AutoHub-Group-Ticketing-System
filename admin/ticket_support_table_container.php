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
  <?php include '../admin/ticket_support_table.php';?>
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
<?php if(!empty($message)) { ?>
      <script>
        toastr.remove();
        toastr.success("Successfully", "Complete data");
        // alert ("Department cannot be empty");
     </script>
     <?php
  } 
   
?>

<!-- Page specific script -->
<script>
// $(document).ready(function() {
//     $('#example1').DataTable( {
//         order: [[ 0, 'desc' ], [ 0, 'asc' ]]
//     } );
// } );
 
  $(function () {
    //Initialize Select2 Elements
    
    $('.select2').select2()
    

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    dataTable = $("#example1").DataTable({
      order: [[ 0, 'desc' ], [ 0, 'asc' ]],
      "columnDefs": [
            {
                "targets": [6],
                "visible": false
            }
        ], 
      pageLength: 5,
      fnDrawCallback: function () {
        // initActionRemove();
      },
      // "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": ["copy", "csv", "e                                                                                                                                            xcel", "pdf", "print", "colvis"]
      // "buttons": ["colvis"]
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    })
    
  });



  
  function confirmDelete(self) {
        var id = self.getAttribute("data-id");
    
        document.getElementById("form-delete-user").id.value = id;
        $("#myModal").modal("show");
    
}
</script>
<script type="text/javascript">
$(document).ready(function() {
    // dataTable = $("#example1").DataTable({
    //   "columnDefs": [
    //         {
    //             "targets": [6],
    //             "visible": false
    //         }
    //     ]
      
    // });
  
  
  
  /*dataTable.columns().every( function () {
        var that = this;
 
        $('input', this.footer()).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that.search(this.value).draw();
            }
        });
      });*/
  
  
    $('.filter-checkbox').on('change', function(e){
      var searchTerms = []
      $.each($('.filter-checkbox'), function(i,elem){
        if($(elem).prop('checked')){
          searchTerms.push("^" + $(this).val() + "$")
        }
      })
      dataTable.column(1).search(searchTerms.join('|'), true, false, true).draw();
    });
  
    $('.status-dropdown').on('change', function(e){
      var status = $(this).val();
      $('.status-dropdown').val(status)
      console.log(status)
      //dataTable.column(6).search('\\s' + status + '\\s', true, false, true).draw();
      dataTable.column(6).search(status).draw();
    })
});
</script>
