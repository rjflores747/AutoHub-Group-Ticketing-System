<?php 
session_start();
include './connect.php';
include './link.php';

$users = mysqli_query($conn,"SELECT * FROM ticket_user WHERE id = '".$_SESSION["userId"]."' ")
  or die ("Failed to query database".mysqli_error($conn)); 
  $user = mysqli_fetch_assoc($users);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                  <p>hi <?php echo $user["ticket_users"];?> </p>
                  <input type="text" id="fromUser" value="<?php echo $user["id"]; ?>" hidden/>
                  <p>Send message to:</p>
                  <ul>
                  <?php
                        $msgs = mysqli_query($conn,"SELECT * FROM ticket_user")
                        or die ("Failed to query database".mysqli_error($conn));
                        while ($msg = mysqli_fetch_assoc($msgs))
                        {
                            echo'<li>
                            <a href="?toUser='.$msg["id"].'">'.$msg["ticket_users"].'</a>
                            </li>';
                        }
                
                  ?>
                  </ul>
                  <a href="index.php"><----back </a>
            </div>
            <div class="col-md-4">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4><?php 
                    if(isset($_GET["toUser"]))
                    {
                        $userName = mysqli_query($conn,"SELECT * FROM ticket_user WHERE id = '".$_GET["toUser"]."' ")
                        or die ("Failed to query database".mysqli_error($conn));
                         $uName = mysqli_fetch_assoc($userName);
                        
                            echo '<input type="text" value='.$_GET["toUser"].' id="toUser"hidden/>';
                            echo $uName["ticket_users"];
                    }
                    else
                    {
                        $userName = mysqli_query($conn,"SELECT * FROM ticket_user")
                        or die ("Failed to query database".mysqli_error($conn));
                         $uName = mysqli_fetch_assoc($userName);
                            $_SESSION["toUser"] = $uName["id"];
                            
                            echo '<input type="text" value='.$_SESSION["toUser"].' id="toUser"hidden/>';
                            echo $uName["ticket_users"];
                    }
                    ?>
                    </div>
                    <div class="modal-body" id="msgBody" style="height:400px; overflow-y:scroll; overflow-x:hidden;">
                
                    <?php
                     if(isset($_GET["toUser"]))
                         $chats = mysqli_query($conn,"SELECT * FROM ticket_messegers WHERE (ticket_from_user = '".$_SESSION["   "]."' AND
                            ticket_to_user = '".$_GET["toUser"]."') OR (ticket_from_user = '".$_GET["toUser"]."' AND ticket_to_user = '".$_SESSION["userId"]
                            ."')")
                            or die ("Failed to query database".mysqli_error($conn));
                     else
                        $chats = mysqli_query($conn,"SELECT * FROM ticket_messegers WHERE (ticket_from_user = '".$_SESSION["userId"]."' AND
                        ticket_to_user = '".$_SESSION["toUser"]."') OR (ticket_from_user = '".$_SESSION["toUser"]."' AND 
                        ticket_to_user = '".$_SESSION["userId"]."')")
                        or die ("Failed to query database".mysqli_error($conn));

                        while($chat = mysqli_fetch_assoc($chats))
                        {
                            if($chat["FromUser"] == $_SESSION["userId"])
                                    echo"<div style='text-align:right;'>
                                         <p style='backgroud-color:lightblue; work-wrap:break-work; display:inline-block;
                                            padding:5px; boarder-radius: 10px; max width: 70%;'>
                                             ".$chat["Message"]."
                                         </p>
                                         </div>";

                            else
                                    echo"<div style='text-align:left;'>
                                    <p style='backgroud-color:yellow; work-wrap:break-work; display:inline-block;
                                    padding:5px; boarder-radius: 10px; max width: 70%;'>
                                    ".$chat["Message"]."
                                    </p>
                                    </div>";
                        }
                        
                    ?>
                  
                    
                    </div>
                    <div class="modal-footer">
                        <textarea class="form-control" id="message" style="height:70px;"></textarea>
                        <button id="send" class="btn btn-primary" style="height: 70px;">send</button>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
               
            </div>

        </div>
    </div>
</body>

<script type="text/javascript">
            $(document).ready(function(){

                $("#send").on("click",function(){
                    $.ajax({
                        url:"../test/function_insertMessage.php",
                        method:"POST",
                        data:{
                            fromUser:$("#fromUser").val(),
                            toUser:$("#toUser").val(),
                            message:$("#message").val(),
                        },
                        dataType:"text",
                        success:function(data)
                        {
                            $("#message").val("");
                        }
                    });
                });
            //     setInterval(function(){
            //     $.ajax({
            //         url:"../test/function_realtimechat.php",
            //         method:"POST",
            //         data:{
            //                 fromUser:$("#fromUser").val(),
            //                 toUser:$("#toUser").val(),
            //             },
            //             dataType:"text",
            //             success:function(data)
            //             {
            //                 $("#msgBody").html(data);
            //             }

            //     });
            // },700);

            });

           

</script>
</html>