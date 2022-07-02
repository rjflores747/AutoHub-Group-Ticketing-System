<?php
	require_once './connect.php';

	// if (!isset($_SESSION["email"])) {
	// 	header("Location: index.php");
	// 	exit();
	// }

	// if (isset($_POST["logIn"])) {
    if (isset($_POST["email"]) && isset($_POST["password"])) {

		$email = $conn->real_escape_string($_POST["email"]);
		$password = sha1($conn->real_escape_string($_POST["password"])); //password
        $query = "SELECT id,ticket_fn,ticket_ln,ticket_user_department,ticket_user_url,ticket_user_role,u_id FROM ticket_user WHERE ticket_email='$email' AND ticket_passaword='$password' AND ticket_status='1'"; 
      
		$data = $conn->query($query);
        
        foreach($data AS $row){
            $ticketfn = $row['ticket_fn']; 
            $ticketln = $row['ticket_ln']; 
			$ticketdepartment = $row['ticket_user_department']; 
			$ticketid_user = $row['id']; 
			$ticket_user_url = $row['ticket_user_url'];
			$ticket_user_role = $row['ticket_user_role'];
			$employee_id = $row['u_id'];
			
        }
		if ($ticketfn != "") {
			$_SESSION['id'] = $ticketid_user;
			$_SESSION["email"] = $email;
			$_SESSION["loggedIn"] = 1;
            $_SESSION['ticket_fn'] = $ticketfn;
            $_SESSION['ticket_ln'] = $ticketln;	
			$_SESSION['ticket_user_department']	= $ticketdepartment;
			$_SESSION['ticket_user_url']	= $ticket_user_url;
			$_SESSION['ticket_user_role'] = $ticket_user_role;
			$_SESSION['u_id'] = $employee_id;
			$_SESSION['ROLE']=$row['ticket_user_role'];
			$_SESSION['IS_LOGIN']='yes';
			if($row['ticket_user_role']==1){
				header('Location: ./admin/ticket_incident.php');
				die();
			}if($row['ticket_user_role']==2){
				header('Location: ./User/user_ticket_incident.php');
				die();
			}
			// echo $ticketfn,$ticketln,$ticketdepartment;
			// header("Location: ./admin/ticket_incident.php");
			// exit();

		} else {
			
			echo "Please check your inputs!";
		}
	}	
?>   