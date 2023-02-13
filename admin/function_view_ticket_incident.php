<?php
require_once '../connect.php';
    if(isset($_POST['View']))
    {
    
      
    
    $queryView = mysqli_query($conn,"SELECT * from ticket_incident") ;
    $resultCheck = mysqli_num_rows($queryView);
    if ($resultCheck > 0){
        while ($row= mysqli_fetch_array($queryView)) {
            $variable_id = $_POST['id'];
            $variable_ticket_number  = $_POST['ticket_number'];
            $variable_ticket_caller  = $_POST['ticket_caller'];
            $variable_ticket_category  = $_POST['ticket_category'];
            $variable_ticket_subcategory  = $_POST['ticket_subcategory']; 
            $variable_ticket_service  = $_POST['ticket_service'];
            $variable_ticket_confif_item  = $_POST['ticket_confif_item']; 
            $variable_ticket_short_discrip  = $_POST['ticket_short_discrip']; 
            $variable_ticket_discription  = $_POST['ticket_discription'];
            $variable_ticket_contact_type  = $_POST['ticket_contact_type'];
            $variable_ticket_status  = $_POST['ticket_status'];
            $variable_ticket_imapact  = $_POST['ticket_imapact'];
            $variable_ticket_urgency  = $_POST['ticket_urgency'];
            $variable_ticket_priority  = $_POST['ticket_priority'];
            $variable_ticket_assign_group  = $_POST['ticket_assign_group'];
            $variable_ticket_assign_to  = $_POST['ticket_assign_to'];
            $variable_ticket_department  = $_POST['ticket_department']; 
         

    }
    }
        
}

?>