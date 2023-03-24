<?php 
require_once '../connect.php'; 

// if (!isset($_SESSION["id"])) {
//   header("Location: index.php"); 
//   exit();
// } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AutoHubGroup | TicketingSystem</title>

  <?php include '../link-required-start.php';?>
          <style>  
       
           .ul-main{  
                
                background-color:#eee;  
                cursor:pointer;  
                
                overflow: scroll;
           }  
           .li-main{  
                padding:12px;  
           }  
           </style> 
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
              <h1>Ticketing<strong> System</strong></h1>
              <p class="lead mb-5">THE SOLUTION OF YOUR PROBLEMS 
                <!-- Ford, Blk 15, Rizal Dr, Crescent Park West, Taguig, 1634 Metro Manila<br>
                Phone: +63 917 528 4442  -->
              </p>  
            </div>
          </div>
          <div class="col-7"> 
             <!-- <form action="" method="post"> -->
                <form action="../admin/function_create_ticket_incident.php" method="POST">
                  <div class="form-group">
                    <label for="inputeparment">Department</label>
                    <select class="form-control select2bs4"  name="inputeparment" id="inputeparment" style="width: 100%;" require>
                                <option value="" require>----- Select Department -----</option>
                                <?php
                                $array_data ['uri'] = 'https://autohub.ph/connect/api/v1/asa/api.php';
                                $array_data['parameters'] = http_build_query(array('key'=>'99799116300681219'));
                                
                                  $result = Utility::curl($array_data);
                                  $department_array = json_decode($result,true);
                                  foreach($department_array as $row1)
                                  {
                                    ?>

                                    <option value="<?php echo $row1['id']?>">
                                    <?php echo $row1['dept_name'];?>
                                  </option>
                                    <?php 

                                  }
                                    ?>
                                </select>
                    <!-- <input type="text" id="inputeparment" name="inputeparment" class="form-control" /> -->
                  </div>
                  
                  <div class="form-group">
                    <label for="inputSubject">Subject</label>
                    <!-- <input type="text" id="inputSubject" name="inputSubject" class="form-control"require /> -->
                    <input type="text" name="inputSubject" id="inputSubject" class="form-control" placeholder="Enter Subject" />  
                    <div id="subjectList"></div>  
            
                  </div>
              
                    <div class="form-group">
                    <label for="inputMessage">Description</label>
                    <textarea id="inputMessage" class="form-control" name="inputMessage" rows="4"require></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" id="button-send-message-details"  class="btn btn-primary" name="submit" value="Send message">
                  </div>
                </form>
              
            <!-- </form> -->
          </div>
        </div>
        </div>
        <!-- /.row -->

        
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  <?php include '../admin/function_suggesstion.php';?>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <?php include '../navbar/footer.php';
  ?>
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
               //Initialize Select2 Elements
    $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
              theme: 'bootstrap4'
            })
            $('#button-send-message-details').on('click', function(){ 
         
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
              url:"create_ticket_incident.php",  
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
                      toastr.success(); 
                      toastr.error("Add successfully","Incomplete data");
                      
                      window.location.href='../admin/ticket_details_container.php?id='+result.id;
                      // $('#modal-finance-add-fni').modal('hide');
                      // $('#loading-view').attr('hidden', true);
                      // $('.el-add').attr('disabled', false);

                      // refreshFinanceTable();
                      // detailsCount();
                      // clearElements();
                  } 
              //     else if(result.status == 0){ // failed add
              //         $('#loading-view').attr('hidden', true);
              //         $('.el-add').attr('disabled', false);

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
<script>  
 $(document).ready(function(){  
      $('#inputSubject').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"../admin/search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#subjectList').fadeIn();  
                          $('#subjectList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#inputSubject').val($(this).text());  
           $('#subjectList').fadeOut();  
      });  
 });  
 </script>  
 
<?php

// require_once '../connect.php';
// // if (!isset($_SESSION["id"])) {
// // 		header("Location: index.php");
// // 		exit(); 
// // 	}
// // use LDAP\Result;
if (isset($_POST["inputSubject"]) && isset($_POST["inputMessage"])&&isset($_POST["inputeparment"])) {
    $date = date('yyyy-m-d h:i:s');
    $departmentType = $_POST['inputSubject'];
    $sortdiscription = $_POST['inputMessage'];
    $discription = $_POST['inputeparment'];
    $fn = $_SESSION['ticket_fn']. $_SESSION['ticket_ln']; 
    // $user_id = $_SESSION['user_id'];
    $employee_id = $_SESSION['id'];
    // $sortdiscription = $_POST['inputSubject'];
    // $discription = $_POST['inputMessage'];
    // $departmentType = $_POST['inputeparment'];
    $return_arrr = array();
   
        $sql = "INSERT INTO ticket_incident(
        id ,
        ticket_number ,
        u_id ,
        ticket_caller ,
        ticket_category ,
        ticket_subcategory ,
        ticket_service ,
        ticket_config_item ,
        ticket_short_discrip ,
        ticket_discription ,
        ticket_filedownload ,
        ticket_contact_type ,
        ticket_status ,
        ticket_imapact ,
        ticket_urgent ,
        ticket_priority ,
        ticket_assign_group ,
        ticket_assign_to ,
        ticket_department_id ,
        ticket_timeofdate ,
        ticket_timeofdate_end ) 
        VALUES 
        ('',
        '".$employee_id."',
        '',
        '".$fn."',
        '',
        '',
        '',
        '',
        '$sortdiscription',
        '$discription',
        '',
        '',
        '3',
        '',
        '',
        '',
        '',
        '',
        '$departmentType',
        NOW(),
        '');";
       
        $result = mysqli_query($conn,$sql);
        if ($result) {
            $last_id = mysqli_insert_id($conn);
            if($last_id){
            $code = rand(1,99999);
            $ticket_number = "ATK_".$code."_".$last_id;
            $query = "UPDATE ticket_incident SET ticket_number = '".$ticket_number."', u_id = '".$employee_id."'  WHERE id = '".$last_id."'";      
            $res = mysqli_query($conn,$query);
            $return_arrr['id'] = $last_id; // success
            }
            
        }   
        if($result > 0)
        {
          $return_arr['status'] = 1;
         
        }
        else
        {
            // echo '<script> alert("Data Not Deleted"); </script>';
            $return_arr['status'] = 0;
        } 
        
         // Insert visitor activity log into database 
            $ActivityLogs = mysqli_query($conn,"INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('".$_SESSION['id']."','You have successfully add new ticket' ,NOW())");
      
            echo json_encode($return_arr);
        // header("location: ../admin/ticket_details_container.php?id=".$last_id);
       
}
?>
