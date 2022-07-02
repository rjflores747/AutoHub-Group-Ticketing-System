<?php 
require_once '../connect.php';
$ticket_id = $_POST['ticket_id'];

$queryinerjoin= "SELECT tc.id,tc.ticket_message,tc.ticket_date_time,tu.id as user_id,tc.ticket_user_id,tu.ticket_fn,tu.ticket_ln FROM `ticket_chat` tc
INNER JOIN  ticket_user tu 
ON tc.ticket_user_id = tu.id
WHERE tc.ticket_id='$ticket_id'
ORDER BY ticket_date_time;";
$result= mysqli_query($conn,$queryinerjoin);
$message['data']= array();
while ($row= mysqli_fetch_array($result)) {
    $postion='left';
  

    if($row['ticket_user_id'] == $_SESSION['id']){
        $postion='right';

    }
    $row['position'] =$postion;
    $message['data'][]= ($row);

        // echo"<tr>";
        // echo"<td>"; echo $rowsqltable["id"];echo"</td>";
        // echo"<td>"; echo $rowsqltable["ticket_number"];echo"</td>";
        // echo"<td>"; echo $rowsqltable["ticket_short_discrip"];echo"</td>";
        // echo"<td>"; echo $rowsqltable["ticket_discription"];echo"</td>";
      
                
                                 
  }
    echo json_encode($message); 
  ?>
  



