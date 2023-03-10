
<?php 
require_once '../connect.php';
$tkdepart_id = $_POST['tkdepart_id'];
$tkdeparttype = $_POST['ticket_dept_assign_name'];

$query= "select * from ticket_department_assig where ticket_dept_assign_uid	='".$tkdepart_id."' order by ticket_dept_assign_name ASC";
$result= mysqli_query($conn,$query);
 
while ($row= mysqli_fetch_array($result)) {
    ?>

    <option  selected value='<?php echo $row['ticket_dept_assign_uid'] ?>'>

    <?php echo $row['ticket_dept_assign_name']; ?>
    </option>;
<?php } ?>