<?php
 session_start();
 include './connect.php';

  
$fromUser = $_POST["fromUser"];
$toUser = $_POST["toUser"];
$output = "";

$chats = mysqli_query($conn,"SELECT * FROM ticket_messegers WHERE (ticket_from_user = '".$fromUser."' AND ticket_to_user ='".$toUser."') OR 
                (ticket_from_user = '".$fromUser."' AND ticket_to_user ='".$toUser."')")
                or die ("Failed to query database".mysqli_error($conn));
                while($chat = mysqli_fetch_assoc($chats))
                {
                    if($chat["FromUser"] == $_SESSION["userId"])
                            $output .= "<div style='text-align:right;'>
                                 <p style='backgroud-color:lightblue; work-wrap:break-work; display:inline-block;
                                    padding:5px; boarder-radius: 10px; max width: 70%;'>
                                     ".$chat["Message"]."
                                 </p>
                                 </div>";

                    else
                            $output.= "<div style='text-align:left;'>
                            <p style='backgroud-color:yellow; work-wrap:break-work; display:inline-block;
                            padding:5px; boarder-radius: 10px; max width: 70%;'>
                            ".$chat["Message"]."
                            </p>
                            </div>";
                }
                echo $output;
?>