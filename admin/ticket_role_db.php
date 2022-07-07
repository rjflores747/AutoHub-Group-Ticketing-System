<?php
include '../connect.php';

if(isset($_POST['Role_submit']))
{
	$Role_name=$_POST['Role_name'];
	$Role_status=$_POST['Role_status'];

	if($Role_name!='')
	{
		$insertqry="INSERT INTO `ticket_role`(`role_name`, `role_status`)   VALUES ('$Role_name','$Role_status')";
		$insertres=mysqli_query($conn,$insertqry);
	}
}
echo '<script>alert(" Menu is added successfully.");
		window.location="ticket_role_add_container.php";
</script>';
?>