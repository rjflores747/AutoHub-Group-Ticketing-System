<?php
	require_once './connect.php';
// echo $_POST['var_email'];
// exit;
    if (isset($_POST["var_email"]) && isset($_POST["var_password"])) {

		$email = $conn->real_escape_string($_POST["var_email"]);
		$password = sha1($conn->real_escape_string($_POST["var_password"])); //password

		$return_arr = array();
		
		$ticketemail='';

		$checkUser = $conn->query("SELECT ticket_email FROM ticket_user WHERE ticket_email='$email'");
		foreach($checkUser AS $row){
			$ticketemail = $row['ticket_email']; 
			
		}

		if($ticketemail == ''){
			$return_arr ['status'] = 0; //no record found 

		}else{
			$query = "SELECT id,ticket_fn,ticket_ln,ticket_user_department,ticket_user_url,ticket_user_role,u_id FROM ticket_user WHERE ticket_email='$email' AND ticket_passaword='$password' AND ticket_status='1'"; 
			$data = $conn->query($query);
			$ticketfn ='';
			foreach($data AS $row){
				    $ticketfn = $row['ticket_fn']; 
				    $ticketln = $row['ticket_ln']; 
					$ticketdepartment = $row['ticket_user_department']; 
					$ticketid_user = $row['id']; 
					$ticket_user_url = $row['ticket_user_url'];
					$ticket_user_role = $row['ticket_user_role'];
					$employee_id = $row['u_id'];
					$email = $row['u_id'];
					
				}
				if($ticketfn != ""){
					$_SESSION['id'] = $ticketid_user;
					$_SESSION["email"] = $email;
					$_SESSION["loggedIn"] = 1;
					$_SESSION['ticket_fn'] = $ticketfn;
					$_SESSION['ticket_ln'] = $ticketln;	
					$_SESSION['ticket_user_department']	= $ticketdepartment;
					$_SESSION['ticket_user_url'] = $ticket_user_url;
					$_SESSION['ticket_user_role'] = $ticket_user_role;
					$_SESSION['u_id'] = $employee_id;
					$_SESSION['ROLE']=$row['ticket_user_role'];
					$_SESSION['IS_LOGIN']='yes';
					
					$return_arr['status'] = 1; // success
				}else{
					$return_arr['status'] = 2; //wrong email and password
					
				}
			
		}
		echo json_encode($return_arr);

       
	}	
?>   