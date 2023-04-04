
<?php
include '../connect.php';

if(isset($_POST['suggestions_submit']))
{
	// $suggestions_id=$_POST['suggestions_id'];
	$name=$_POST['ticket_status_name'];
	
	if($suggestions_name!='')
	{
		$insertqry="INSERT INTO `ticket_status`(`ticket_status_name`, `status`,`createdAt`)  VALUES ('$name','1',NOW())";
		$insertres=mysqli_query($conn,$insertqry);
	}
}
// echo '<script>alert("added successfully.");
// 		window.location="ticket_status_add_container.php";
// </script>';
?>