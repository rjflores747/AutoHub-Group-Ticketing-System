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
  <style>
    .p1 {
        font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
        }

  </style>
  
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
  <?php include '../admin/ticket_role_add.php';?>
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

var ticketlist = null;
var Toast = null;
// global variable
$(function() {
     Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
  //for the deparment to deparment assignment
  $(document).ready(function(){
      $("#tkdepart").change(function(){
        var tkdepart_id = this.value;
        $.ajax({
        url: "ticket_role_add_container.php",
        type: "POST",
        data: {
          tkdepart_id: tkdepart_id
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

    var cols = [
      {
        title: "ID #	",
        data: "id",
        className: "",
        // orderable: true,
        width: "1%",
      },
      {
        title: "Employee ID number",
        data: "ticket_employee_id",
        className: "",
        // orderable: true,
        width: "2%",
      },
      {
        title: "Firstname",
        data: "ticket_fn",
        className: "",
        // orderable: true,
        width: "5%",
      },
      {
        title: "Lastname",
        data: "ticket_ln",
        className: "",
        // orderable: true,
        width: "5%",
      },
      
      {
        title: "Status",
        data: "ticket_status",
        className: "",
        
        render: function (data, type, row, meta) {
          //  alert(row['ticket_status']);
          if(row['ticket_status'] == '1'){

            return '<span class="badge badge-info">Active</span>';
          }else if(row['ticket_status'] == '0' ){

            return '<span class="badge badge-danger">Deactive</span>' ;
          }
       
        },
        // orderable: true,
        width: "1%",
      },
      {
        title: "Action",
        data: null,
        orderable: false,
        width: "1%",
        // className: "align-middle p-1 dt-center",

        render: function (data, type, row, meta) {

          var view = `<a href="../admin/ticket_permission_select_container.php?id=`+
            row.id +
            `" style="cursor:pointer;" class="m-1 btn btn-sm btn-warning btn-icon" title="View"><i class="fas fa-eye"></i></a> `;
          var update = `         <a href="../admin/ticket_update_role_container.php?id=`+
            row.id +  
            `" style="cursor:pointer;" class="m-1 btn btn-sm btn-primary btn-icon" title="Edit"><i class="fas fa-pen"></i></a>`;
          var remove = `<a data-action-remove="`+row.id+`" style="cursor:pointer;" class="m-1 btn btn-sm btn-danger btn-icon" title="Remove"><i class="fa fa-trash"></i></a>`;
          
      
          if(row['ticket_status'] == '1' ){
            return (
            `
                   <div class="row justify-content-center">
                   `+view+update+` 
                   </div>
                   `
          );
          }
         
        },
      },
    ];
    $(document).on('click','.update',function(){
      var id = $(this).attr('id'); 
      $.ajax({
        url:"",
        method:"POST",
        data:{id,id},
        success:function(data)
        {

        }
      })
    });
    ticketlist =  $("#example1").DataTable({
      fnDrawCallback: function () {
        initActionRemove();
      },
//get data in table from database 
      ajax: {
        url: "load_table_role_container.php",
        data: function (d) {
          return $.extend({}, d, {
            search_type: "search_type_filter",
          });
        },
      },
      columns: cols,
      responsive: true,
      processing: true,
      serverSide: true,
      retrieve: true,

      //  data: data,
      paging: true,
      lengthChange: false,
      searching: true,
      //  ordering: true,
      // pageLength: 10,
      info: true,
      autoWidth: false,
      // responsive: true,
      // processing: true,
      fixedColumns: true,
      // serverSide: true,

      "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      "buttons": ["colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });

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
                  title: 'SucesssFul Deleted.'
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
});
</script>


   


