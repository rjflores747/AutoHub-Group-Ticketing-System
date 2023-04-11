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
             <!-- <form method="post"> -->
                <form action="../admin/function_create_ticket_incident.php" method="POST">
                  <div class="form-group">
                    <label for="inputeparment">Department</label>
                    <select class="form-control select2bs4"  name="inputeparment" id="inputeparment" style="width: 100%;" required>
                                <option value="" >----- Select Department -----</option>
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
                    <input type="text" name="inputSubject" id="inputSubject" class="form-control" placeholder="Enter Subject"required />  
                    <div id="subjectList"></div>  
            
                  </div>
              
                    <div class="form-group">
                    <label for="inputMessage">Description</label>
                    <textarea id="inputMessage" class="form-control" name="inputMessage" rows="4"required></textarea>
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