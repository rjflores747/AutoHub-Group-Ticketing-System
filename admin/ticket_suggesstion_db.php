<?php
include '../connect.php';

  if($_SERVER["REQUEST_METHOD"]== "POST")
  // if(isset($_POST['suggestions_submit']))
{
	// $suggestions_id=$_POST['suggestions_id'];
	$suggestions_name=$_POST['suggestions_name'];
	$suggestions_description=$_POST['suggestions_description'];

	if($suggestions_name!='')
	{
		$insertqry="INSERT INTO  `ticket_suggestions`(`suggestions_name`, `suggestions_description`,`suggestions_status`)  VALUES ('$suggestions_name','$suggestions_description','1')";
		$insertres=mysqli_query($conn,$insertqry);
	}
// 	$sql = "insert into ticket_suggestions(
// 		`suggestions_name`, 
// 		`suggestions_description`, 
// 		`suggestions_status`
// 		)
// 		VALUES(
// 		'".$suggestions_name."',
// 		'".$suggestions_description."',
// 		'1'
// 		) ";
// 		mysqli_query($conn,$sql);
// var_dump($sql);
// exit;
}
// echo '<script>alert("added successfully.");
// 		window.location="ticket_suggesstion_add_container.php";
// </script>';
?>