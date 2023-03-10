
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
  <?php include '../admin/ticket_myticket_table.php';?>
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
          url: "function_ticket_incident_ajax.php",
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
        $(document).ready(function(){
            var empDataTable = $('#empTable').DataTable({
              fnDrawCallback: function () {
                    initActionRemove();
                  },
                'processing': true,
                'serverSide': true,
                'serverMethod': 'get',

                 ajax: {
                    'url':'load_table_container.php',

                    data: function (d) {
                    return $.extend({}, d, {
                        'type': 2,
                    });
                    },
                },
                pageLength: 5,
                'columns': [
                    { data: 'id' },
                    { data: 'ticket_number' },
                    { data: 'ticket_short_discrip' },
                    { data: 'ticket_discription' },
                    { data: 'ticket_status' ,
                      render: function (data, type, row, meta) {
                      //  alert(row['ticket_status']);
                      if(row['ticket_status'] == 'Open'){

                        return '<span class="badge badge-info">Open</span>';
                      }else if(row['ticket_status'] == '2' ){

                        return '<span class="badge badge-danger">Close</span>' ;
                      }else if(row['ticket_status'] == '3' ){

                      return '<span class="badge badge-success">New</span>' ;
                      }else if(row['ticket_status'] == 'Pending'){

                        return '<span class="badge badge-warning">Pending</span> ';
                      }else if(row['ticket_status'] == 'Success' ){
                        return '<span class="badge badge-success">Success</span>';

                      }else if(row['ticket_status'] == '1' ){

                        return '<span class="badge badge-primary">In Progress</span>';
                      }
                    },},
                      {
                    title: "Action",
                    data: null,
                    orderable: true,
                    width: "3%",



                    render: function (data, type, row, meta) {

                      var view = `<a href="../admin/ticket_details_container.php?id=`+
                        row.id +
                        `" style="cursor:pointer;" class="m-1 btn btn-sm btn-warning btn-icon" title="View"><i class="fas fa-eye"></i></a> `;
                         // Insert visitor activity log into database 

                    <?php   $ActivityLogs = mysqli_query($conn,"INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('".$_SESSION['u_id']."','View User ' ,NOW())");?>

                      var update = `<a href="../admin/ticket_update_incident_container.php?id=`+
                        row.id +
                        `" style="cursor:pointer;" class="m-1 btn btn-sm btn-primary btn-icon" title="Edit"><i class="fas fa-pen"></i></a>`;
                      var remove = `<a data-action-remove="`+row.id+`" style="cursor:pointer;" class="m-1 btn btn-sm btn-danger btn-icon" title="Remove"><i class="fa fa-trash"></i></a>`;


                      if(row['ticket_user_role'] == '1' ){
                        return (
                        `
                              <div class="row justify-content-center">
                              `+view+update+remove+` 
                              </div>
                              `
                      );
                      }else if(row['ticket_user_role'] == '2'){
                        return(`
                        <div class="row justify-content-center">
                              `+view+update+` 
                              </div>
                              
                        `);
                      }else if(row['ticket_user_role'] == '3'){
                        return(`
                        <div class="row justify-content-center">
                              `+view+` 
                              </div>
                              
                        `);
                      }
                    },
                  },



                ]
            });

        });
                function initActionRemove() {
                  $("[data-action-remove]").each(function () {
                    $(this).on("click", function () {
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

                              $("#empTable").DataTable().ajax.reload();
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