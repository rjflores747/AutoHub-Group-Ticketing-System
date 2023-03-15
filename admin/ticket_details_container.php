<?php 
require_once '../connect.php';
  if (!isset($_GET['id'])) {
    header('Location: ticket_incident.php');
    exit;
  }
  $ticket_id =intval($_GET['id']); 
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
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

</head>
<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
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
       <br>
       <?php include '../admin/ticket_details.php';?>
            <!-- Main Content-->

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script>
   var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
//rating fuction to insert the database
 function rate(ticketrating,ticketreadonly){
  $(".rateYo").rateYo({fullStar: true,  rating: ticketrating, readOnly: ticketreadonly })
             .on("rateyo.set", function (e, data) {

                //  alert("The rating is set to " + data.rating + "!");
                 $.ajax({
                  url: "function_rating_star_insert.php",
                  type: "POST",
                  data: {
                    // variable
                    ticket_id: ticket_id, 
                    rating: data.rating,
                    // user_id: user_id,
                  },
                  cache: false,
                  success: function(result1){     
                  
                        Toast.fire({
                        icon: 'success',
                        title: 'Rated SucesssFul.'

                      }); 
                      $(".rateYo").rateYo("destroy");
                      rate(data.rating,true);
                      
                  }
                  });  
                  });

 }
// rating star for the insert of the database
$(function () {
 
var ticketrating = '<?php echo $ticket_rating ?>';
var ticketreadonly = false;
if(parseInt(ticketrating)){
  ticketreadonly = true;
}
 rate(ticketrating,ticketreadonly);
 
}); 

  
</script>



<script>
var ticket_id = <?=$ticket_id?>;



  $('#messagebtn').on('click',function(){
    var message = $('#messageText').val();
    // loadMessage(ajax_response)
    $.ajax({
        url: "function_chat_message_insert.php",
        type: "POST",
        data: {
          ticket_id: ticket_id, 
          message: message,
        },
        cache: false,
        success: function(result1){     
        
          $("#messageText").val("");
          readmessage();
        }
        });  
  });

  function readmessage(){
    $.ajax({
        url: "function_read_chat_message.php",
        type: "POST",
        dataType:"json",
        data: {
          ticket_id: ticket_id, 
          // message: message,
        },
        cache: false,
        beforeSend:function(){
          $('#messageContainer').empty();
         
        },
        success: function(result1){     
          loadMessage(result1);
       
        }
        });  
  }
  function loadMessage(ajax_response){ 
     console.log(ajax_response[0]);
    var html_message  = ``;
    $.each(ajax_response.data,function(i,v){
      console.log(v);
      if(v.position == 'left'){
        html_message += ` <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">`+v.ticket_fn+`</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> `+v.ticket_date_time+`</small></p>
            </div>
            <div class="timeline-body">
              <p>`+v.ticket_message+`</p>
            </div>
          </div>
        </li>`
      }else{
        html_message += `  <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">`+v.ticket_fn+`</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>`+v.ticket_date_time+`</small></p>

            </div>
            <div class="timeline-body">
              <p>`+v.ticket_message+`</p>
            </div>
          </div>
        </li> `;
      }
    });
    $('#messageContainer').html(
      html_message
    )
    
    
  }
  $(document).ready(function(){
    readmessage();
  });
</script>
<script>

$('#Updatestatu').on('click',function(){
    var status = $('#statusText').val();
    // loadMessage(ajax_response)
    $.ajax({
        url: "function_update_status.php",
        type: "POST",
        data: {
          ticket_id: ticket_id, 
          status: status,
        },
        cache: false,
        success: function(result1){     
        
          $("#statusText").val("");
          readmessage();
        }
        });  
  });
</script>
</html>
