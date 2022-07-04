
                  <?php               
                 require_once '../connect.php';
                 $ticketwhere = '';
                 if($_SESSION['ROLE'] == 1){
                  $ticketwhere = '';
                 }elseif($_SESSION['ROLE'] == 2){
                  $ticketwhere = 'AND ticket_assign_to = '.$_SESSION['id'];
                 }elseif($_SESSION['ROLE'] == 3){
                  $ticketwhere = 'AND u_id = '.$_SESSION['u_id'];
                 }
                    // $refeshtablenew = $_POST["refeshtablenew"];
                    $sqltable="SELECT * FROM ticket_incident  where 1 ".$ticketwhere;
                    $resultsqltable = mysqli_query($conn,$sqltable);
                    $ticket['data'] = array();
                    while ($rowsqltable = mysqli_fetch_assoc($resultsqltable)){
                        $ticket['data'][] = array(
                          'id'=>$rowsqltable['id'],
                          'ticket_number'=>$rowsqltable['ticket_number'],
                          'ticket_short_discrip'=>$rowsqltable['ticket_short_discrip'],
                          'ticket_discription'=>$rowsqltable['ticket_discription'],
                          'ticket_status'=>$rowsqltable['ticket_status'],
                          'ticket_user_role'=>$_SESSION['ticket_user_role'],
                        );
                        
                        
                    }
                    $sqltablecount="SELECT count(*) AS TOTAL FROM ticket_incident ";
                    $resultsqltablecount = mysqli_query($conn,$sqltablecount);
                    $ticket['recordsTotal']=0;
                    $ticket['recordsFiltered']=0;
                    while($sqltablecount = mysqli_fetch_assoc($resultsqltablecount)){
                      $ticket['recordsTotal']=$sqltablecount['TOTAL'];
                      $ticket['recordsFiltered']=$sqltablecount['TOTAL'];

                    }
                    $ticket['draw'] = $_REQUEST['draw'];

                    echo json_encode($ticket);
                  ?>