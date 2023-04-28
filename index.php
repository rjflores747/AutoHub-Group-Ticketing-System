<?php 
    require_once './connect.php';
  if (isset($_SESSION['id'])) {
	header('Location: ./admin/ticket_incident.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AutoHub Group | Ticketing System</title>
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
	<?php 
	include './link-required-start.php';?>

	<link rel="icon" href="img/autohub-logo.png">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
	 <div class="w-400 p-5 shadow rounded">
	 	<!-- <form method="post" action="function_login.php"> -->
	 		<div class="d-flex justify-content-center align-items-center flex-column">

	 		<img src="img/autohub-logo.png" class="rounded-circle" style="width: 130px;" alt="Cinque Terre">
	 		<h3 class="display-4 fs-1 text-center"> LOGIN</h3>   

	 		</div>
	 		
		  <div class="mb-3">
		    <label class="form-label"> ASA Account</label>
		    <input type="text"class="form-control" id="inputuser" name="user" require>
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" class="form-control" id="inputpassowrd" name="password" require>
		  </div>
		  
		  <button type="submit" id="button-logIn-details" class="btn btn-primary" name="logIn">
				  <i class='fas fa-sign-in-alt'></i>  LOGIN</button>
		  <!-- <a href="signup.php">Sign Up</a> -->
		<!-- </form> -->
	 </div>
	 <?php include  './link-required-scripts-end.php';?>
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
</body>

</html>