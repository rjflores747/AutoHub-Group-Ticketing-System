
                  <?php            
                
                  require_once '../connect.php';
                  $ticketwhere = '';
                  if($_SESSION['ticket_user_role'] == 1){
                   $ticketwhere = '';
                  }elseif($_SESSION['ticket_user_role'] == 2){
                   $ticketwhere = 'AND ticket_assign_to = '.$_SESSION['id'];
                  }elseif($_SESSION['ticket_user_role'] == 3){
                   $ticketwhere = 'AND u_id = '.$_SESSION['u_id'];
                  }
                     // $refeshtablenew = $_POST["refeshtablenew"];
                     $sqltable="SELECT * FROM ticket_role  where 1 ".$ticketwhere;
                     $resultsqltable = mysqli_query($conn,$sqltable);
                     $ticket['data'] = array();
                     while ($rowsqltable = mysqli_fetch_assoc($resultsqltable)){
                         $ticket['data'][] = array(
                           'id'=>$rowsqltable['id'],
                           'role_name'=>$rowsqltable['role_name'],
                           'role_status'=>$rowsqltable['role_status'],
                           
                         );
                         
                         
                     }
                     $sqltablecount="SELECT count(*) AS TOTAL FROM ticket_role ";
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