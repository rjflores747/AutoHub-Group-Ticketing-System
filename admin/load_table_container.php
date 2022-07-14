
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
                //  $search = $_GET['search']['value'];
                 $draw = $_POST['draw'];  
                 $row = $_POST['start'];
                 $rowperpage = $_POST['length']; // Rows display per page
                 $columnIndex = $_POST['order'][0]['column']; // Column index
                 $columnName = $_POST['columns'][$columnIndex]['data']; // Column name
                 $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
                 $searchValue = mysqli_real_escape_string($conn,$_POST['search']['value']); // Search value
               ## Total number of records without filtering
                $sel = mysqli_query($conn,"select count(*) as allcount from ticket_incident");
                $records = mysqli_fetch_assoc($sel);
                $totalRecords = $records['allcount'];
                ## Total number of records with filtering
                $sel = mysqli_query($conn,"select count(*) as allcount from ticket_incident WHERE 1 ".$searchValue);
                $records = mysqli_fetch_assoc($sel);
                $totalRecordwithFilter = $records['allcount'];
                
                
                    // // $refeshtablenew = $_POST["refeshtablenew"];
                    // $sqltable="SELECT * FROM ticket_incident  where  1  and (ticket_number LIKE '%".$searchValue."%' OR ticket_short_discrip LIKE '%".$searchValue."%')  ".$ticketwhere ;
                    // $resultsqltable = mysqli_query($conn,$sqltable);
                    // $ticket['data'] = array();
                    // while ($rowsqltable = mysqli_fetch_assoc($resultsqltable)){
                    //     $ticket['data'][] = array(
                    //       'id'=>$rowsqltable['id'],
                    //       'ticket_number'=>$rowsqltable['ticket_number'],
                    //       'ticket_short_discrip'=>$rowsqltable['ticket_short_discrip'],
                    //       'ticket_discription'=>$rowsqltable['ticket_discription'],
                    //       'ticket_status'=>$rowsqltable['ticket_status'],
                    //       'ticket_user_role'=>$_SESSION['ticket_user_role'],
                    //     );
                        
                        
                    // }
                ## Fetch records
                          $empQuery = "select * from ticket_incident WHERE 1 ".$searchValue." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
                          $empRecords = mysqli_query($conn, $empQuery);
                          
                          $data1 = array();
                          
                          while($row = mysqli_fetch_assoc($empRecords)){
                              $discription = $row['ticket_discription'];
                              $discriptionarray = " $discription";
                              $data[] = array(
                                      "id"=>$row['id'],
                                      "ticket_number"=>$row['ticket_number'],
                                      "ticket_short_discrip"=>$row['ticket_short_discrip'],
                                      "ticket_discription"=>$discriptionarray,
                                      "ticket_status"=>$row['ticket_status'],
                                      'ticket_user_role'=>$_SESSION['ticket_user_role'],
                                  );
                          }
                    
                    ## Response
                      $response = array(
                        "draw" => intval($draw),
                        "iTotalRecords" => $totalRecords,
                        "iTotalDisplayRecords" => $totalRecordwithFilter,
                        "aaData" => $data
                      );
                    echo json_encode($response);
                  ?>