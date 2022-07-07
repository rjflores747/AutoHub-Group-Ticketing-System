<?php 
    require_once './connect.php';
//   if (!isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AutoHub Group | Ticketing System</title>
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
	<?php include './link-required-start.php';?>

	<link rel="icon" href="img/autohub-logo.png">
</head>
<body class="d-flex
             justify-content-center
             align-items-center
             vh-100">
	 <div class="w-400 p-5 shadow rounded">
	 	<form method="post" 
	 	      action="function_login.php">
	 		<div class="d-flex
	 		            justify-content-center
	 		            align-items-center
	 		            flex-column">

	 		<img src="img/autohub-logo.png" 
	 		     class="rounded-circle" style="width: 130px;" alt="Cinque Terre">
	 		<h3 class="display-4 fs-1 
	 		           text-center">
	 			       LOGIN</h3>   


	 		</div>
	 		
		  <div class="mb-3">
		    <label class="form-label">
		           Email</label>
		    <input type="email" 
		           class="form-control"
		           name="email" require>
		  </div>

		  <div class="mb-3">
		    <label class="form-label">
		           Password</label>
		    <input type="password" 
		           class="form-control"
		           name="password" require>
		  </div>
		  
		  <button type="submit" 
		          class="btn btn-primary" name="logIn">
				  <i class='fas fa-sign-in-alt'></i>  LOGIN</button>
		  <a href="signup.php">Sign Up</a>
		</form>
	 </div>
</body>
<?include  './link-required-scripts-end.php';?>
</html>
