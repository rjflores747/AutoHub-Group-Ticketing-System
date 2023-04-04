<?php
include '../connect.php';

if(isset($_POST['suggestions_submit']))
{
	// $suggestions_id=$_POST['suggestions_id'];
	$suggestions_name=$_POST['suggestions_name'];
	$suggestions_description=$_POST['suggestions_description'];

	if($suggestions_name!='')
	{
		$insertqry="INSERT INTO  `ticket_suggestions`(`suggestions_name`, `suggestions_description`,`suggestions_status`)  VALUES ('$suggestions_name','$suggestions_description','1')";
		$insertres=mysqli_query($conn,$insertqry);
	}
}
echo '<script>alert("added successfully.");
		window.location="ticket_suggesstion_add_container.php";
</script>';
?>