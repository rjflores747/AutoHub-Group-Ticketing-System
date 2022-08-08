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
			$('#button-logIn-details').on('click', function(){ 
		// alert ($('#inputemail').val());
		// alert(1);
		// return;
			//variable
			 var variable_user = $('#inputuser').val();
			 var variable_passowrd = $('#inputpassowrd').val();

		// REQUIREMENTS
		if(variable_user == ""){
			toastr.remove();
			toastr.error("User ID cannot be empty", "Incomplete data");

			return;
		}
		if(variable_passowrd == ""){
			toastr.remove();
			toastr.error("Password cannot be empty", "Incomplete data");

			return;
		}
		 // Login Validation
		 $.ajax({
        url:"function_login.php",  
        type:"POST", 
        dataType:"json",
        data: {
            var_user: variable_user, 
            var_password: variable_passowrd, 
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
				window.location.href='./admin/ticket_incident.php';
                // $('#modal-finance-add-fni').modal('hide');
                // $('#loading-view').attr('hidden', true);
                // $('.el-add').attr('disabled', false);

                // refreshFinanceTable();
                // detailsCount();
                // clearElements();
            } 
            else if(result.status == 0){ // failed add
                // $('#loading-view').attr('hidden', true);
                // $('.el-add').attr('disabled', false);

                toastr.remove();
                toastr.error("No Record Found");
				return;
            } 
            else if(result.status == 2){ // dealer validation error
                // $('#loading-view').attr('hidden', true);
                // $('.el-add').attr('disabled', false);

                toastr.remove();
                toastr.error("Wrong Credentials");
				return;
            } 
            // else if(result.status == 3){ // duplicate
            //     toastr.remove();
            //     toastr.warning("Duplicate record");
            //     // var duplicate_id = result.duplicate_id;
            //     // var duplicate_plate_cs_number = result.duplicate_plate_cs_number;

            //     // alertDuplicate(duplicate_id, duplicate_plate_cs_number);

            //     $('#loading-view').attr('hidden', true);
            //     $('#button-add-fni-details').attr('disabled', false);

            //     return;
            // }
            // else if(result.status == 4){ // invalid email
            //     $('#loading-view').attr('hidden', true);
            //     $('.el-add').attr('disabled', false);

            //     toastr.remove();
            //     toastr.error("Invalid email");

            //     return;
            // }
        }
    })

	});
})
</script>