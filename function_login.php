<?php
	require_once './connect.php';
// echo $_POST['var_email'];
// exit;
	
    if (isset($_POST["var_user"]) && isset($_POST["var_password"])) {
		$userid = $conn->real_escape_string($_POST["var_user"]);
		$password = $conn->real_escape_string($_POST["var_password"]);
// connection for the asa account 
		$array_data ['uri'] = 'https://autohub.ph/connect/api/v1/asa/api.php';
		$array_data['parameters'] = http_build_query(array(
			'key'=>'99797807845605376',
			'username'=> $userid,
			'password'=>$password,


		));
		 $array_data['headers'] = array('Content-Type'=>'application/json; charset=utf-8');
		  $result = Utility::curl($array_data);
		  $user_array = json_decode($result,true);
		
		if($user_array ['status'] == 1){ //success

			$SQLuserinsert = "INSERT INTO `ticket_user`(
					`id`,
					`u_id`,
					`ticket_users`,
					`ticket_fn`,
					`ticket_ln`,
					`ticket_employee_id`,
					`ticket_email`,
					`ticket_password`,
					`ticket_status`,
					`ticket_user_department`,
					`ticket_deal_name`,
					`ticket_comp_name`,
					`ticket_position`,
					`ticket_mobile`,
					`ticket_dob`,
					`ticket_user_url`,
					`ticket_user_role`,
					`ticket_createdAt`
				) VALUES 
				('',
				'".$user_array['u_id']."',
				'',
				'".$user_array['u_fname']."',
				'".$user_array['u_lname']."',
				'".$user_array['employee_id']."',
				'".$user_array['email']."',
				'".$user_array['u_password']."',
				'1',
				'".$user_array['dept_id']."',
				'".$user_array['deal_name']."',
				'".$user_array['comp_name']."',
				'".$user_array['u_position']."',
				'".$user_array['usr_mobile']."',
				NOW(),
				'ibro.png',
				'1',
				NOW()
				) ON DUPLICATE KEY UPDATE 
				`ticket_fn` = VALUES(ticket_fn), 
				`ticket_ln` = VALUES(ticket_ln),
				`ticket_email` = VALUES(ticket_email), 
				`ticket_comp_name` = VALUES(ticket_comp_name), 
				`ticket_deal_name` = VALUES(ticket_deal_name), 
				`ticket_position` = VALUES(ticket_position),
				`ticket_mobile` = VALUES(ticket_mobile), 
				`ticket_password` = VALUES(ticket_password), 
				`ticket_user_department` = VALUES(ticket_user_department) 
				";
				$return_arr['status'] = 1; 
				mysqli_query($conn,$SQLuserinsert);

				$SQLDepartmentinsert = "INSERT INTO `ticket_deparment`(
				
					`ticket_dept_source_id`, 
					`ticket_dept_name`, 
					`ticket_dept_tnd`
					) VALUES 
					(
					'".$user_array['dept_id']."',
					'".$user_array['dept_name']."',
					NOW()
					) ON DUPLICATE KEY UPDATE 
					`ticket_dept_name`= VALUES(ticket_dept_name)
					";
					$return_arr['status'] = 1; 
					mysqli_query($conn,$SQLDepartmentinsert);

				$query = "SELECT * FROM ticket_user WHERE u_id='".$user_array['u_id']."'"; 
			
				$result=mysqli_query($conn,$query);
              
				while ($row = mysqli_fetch_assoc($result)) {
					$_SESSION = $row;
					
					} 

					// print_r($_SESSION['id']);exit;
			
		}else{
			$return_arr['status'] = 2; //wrong email and password
		}
	
		echo json_encode($return_arr);
		exit;
		$email = $conn->real_escape_string($_POST["var_user"]);
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
					$email = $row['ticket_email'];
					
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
					$_SESSION['ticket_user_role']=$row['ticket_user_role'];
					$_SESSION['IS_LOGIN']='yes';
					
					$return_arr['status'] = 1; // success
				}else{
					$return_arr['status'] = 2; //wrong email and password
					
				}
			
		}
		echo json_encode($return_arr);

       
	}	
?>   