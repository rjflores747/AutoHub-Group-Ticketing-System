
                  <?php       
                          
                 require_once '../connect.php';
                 $employee_id = $_SESSION['u_id']; 
                    // $refeshtablenew = $_POST["refeshtablenew"];
                    $sqltable="SELECT * FROM ticket_incident where u_id='$employee_id'";
                    $resultsqltable = mysqli_query($conn,$sqltable);
                    $ticket['data'] = array();
                    while ($rowsqltable = mysqli_fetch_assoc($resultsqltable)){
                        $ticket['data'][] = array(
                          'id'=>$rowsqltable['id'],
                          'ticket_number'=>$rowsqltable['ticket_number'],
                          'ticket_short_discrip'=>$rowsqltable['ticket_short_discrip'],
                          'ticket_discription'=>$rowsqltable['ticket_discription'],
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