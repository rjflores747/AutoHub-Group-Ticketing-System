<?php 
require_once '../connect.php';
$tkdepart_id = $_POST['tkdepart_id'];
$tkdeparttype = $_POST['ticket_dept_assign_name'];
$query= "select * from ticket_user where ticket_user_department ='".$tkdepart_id."'";
$result= mysqli_query($conn,$query);
 
while ($row= mysqli_fetch_array($result)) {
    ?>
    <option value='<?php echo $row['id'] ?>'>
    <?php echo $row['ticket_fn'].' '.$row['ticket_ln']; ?>
    </option>;
<?php } ?>



