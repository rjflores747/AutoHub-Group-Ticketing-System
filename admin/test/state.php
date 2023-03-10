<?php 
 require './connect.php';
 
$country_id = $_POST['country_id'];
$query= "select * from ticket_department_assig where ticket_dept_assign_uid='".$country_id."' order by ticket_dept_assign_name ASC";
$result= mysqli_query($conn,$query);
 
while ($row= mysqli_fetch_array($result)) {
    ?>
    <option value='<?php echo $row['ticket_dept_assign_uid'] ?>'><?php echo $row['ticket_dept_assign_name']; ?></option>;
<?php } ?>