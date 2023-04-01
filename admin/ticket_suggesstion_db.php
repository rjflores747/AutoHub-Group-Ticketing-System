<?php
include '../connect.php';

// if(isset($_POST['suggestions_submit']))
if($_SERVER["REQUEST_METHOD"]== "POST")
{
	// $suggestions_id=$_POST['suggestions_id'];
	$suggestions_name=$_POST['suggestions_name'];
	$suggestions_description=$_POST['suggestions_description'];

	// if($suggestions_name!='')
	// {
	// 	$insertqry="INSERT INTO  `ticket_suggestions`(`suggestions_name`, `suggestions_description`,`suggestions_status`)  VALUES ('$suggestions_name','$suggestions_description','1')";
	// 	$insertres=mysqli_query($conn,$insertqry);
	// 	var_dump($insertqry);
	// 	exit;
	// }
	if(!$conn)
	{
		die("connection failed " . mysqli_connect_error());
	}
	else
	{
	$insertqry = "INSERT INTO  `ticket_suggestions`(`suggestions_name`, `suggestions_description`,`suggestions_status`)  VALUES ('$suggestions_name','$suggestions_description','1')";
		if(mysqli_query($conn,$insertqry))
		{
			echo "Added successfully";	
		}else
		{
			echo "Record Faileddd";
		}
		echo '<script>alert("added successfully.");
		window.location="ticket_suggesstion_add_container.php";
		</script>';
	}
	

}

?>