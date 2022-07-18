<?php
require_once "./connect.php";

if(isset($_POST['id']))
{
   $queryRole = "UPDATE `ticket_role`
    SET 
    `id`='[value-1]',
    `role_name`='[value-2]',
    `role_status`='[value-3]' 
    WHERE 1";
}

?>