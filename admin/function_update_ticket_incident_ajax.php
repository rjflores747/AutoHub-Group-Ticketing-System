<?php 
require_once '../connect.php';
$tkdepart_id = $_POST['tkdepart_id'];
$tkdeparttype = $_POST['ticket_dept_assign_name'];
$query= "select * from ticket_department_assig where id	='".$tkdepart_id."' order by ticket_dept_assign_name ASC";
$result= mysqli_query($conn,$query);
 
while ($row= mysqli_fetch_array($result)) {
    ?>
    <option value='<?php echo $row['id'] ?>'>
    <?php echo $row['ticket_dept_assign_name']; ?>
    </option>;
<?php } ?>



