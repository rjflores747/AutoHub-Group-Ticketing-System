<?php
session_start();
include "./connect.php";    
include "./link.php";



if(isset($_POST["uname"]))
{

        $sql = "INSERT INTO ticket_user (ticket_users) VALUES ('".$_POST["uname"]."')";

        if($conn->query($sql))
        header('location: ticket_register.php');
        else
            echo"ERROR. PLEASE TRY AGAIN";
}   
     
if(isset($_GET["userId"]))
{
    $_SESSION["userId"] = $_GET["userId"];
    header("location: ../techatbox.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messagers </title>
</head>
<body>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Plese Select your Account</h4>
            </div>
            <div class="modal-body">
                <lo>
                <?php
                        $users = mysqli_query($conn,"SELECT * FROM ticket_user")
                        or die ("Failed to query database".mysqli_error($conn));
                        while ($user = mysqli_fetch_assoc($users))
                        {
                            echo'<li>
                            <a href="../test/chatbox.php?userId='.$user["id"].'">'.$user["ticket_users"].'</a>
                            </li>';
                        }
                
                  ?>
                  <form action="./ticket_register.php" method="post">
                      <p>name</p>
                      <input type="text" name="uname" id="uname" class="form-control">
                      <br>
                      <input type="submit" name="submit" value="OK"  style="float:right" class="btn btn-primary">
                      <br>
                  </form>
                </lo>
                
                <a href="register.php" style="float:right">regiter here</a>
            </div>
        </div>
    </div>
</body>
</html>