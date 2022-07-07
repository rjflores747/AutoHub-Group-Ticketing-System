<?php
include '../connect.php';

if(isset($_POST['Permission_submit']))
{
	$Permission_id=$_POST['Permission_id'];
	$Permission_name=$_POST['Permission_name'];
	$Permission_status=$_POST['Permission_status'];

	if($Permission_name!='')
	{
		$insertqry="INSERT INTO  `ticket_role_permission`(`role_permission_id`, `role_permission`, `role_permission_status`)  VALUES ('$Permission_id','$Permission_name','$Permission_status')";
		$insertres=mysqli_query($conn,$insertqry);
	}
}
echo '<script>alert(" Menu is added successfully.");
		window.location="ticket_permistion_add_container.php";
</script>';
?>