
                  <?php               
                 require_once '../connect.php';
                 $type = $_GET['type'];
                 $ticketwhere = '';
                 $role = $_SESSION['ticket_user_role'];
                 if($type == 1){
                  if($role == 1){
                    $ticketwhere = '';
                  }else{
                    $ticketwhere = 'AND ticket_department_id = '.$_SESSION['ticket_user_department'];
                  }
                  
                 }elseif($type == 2){
                  $ticketwhere = 'AND u_id = '.$_SESSION['id'];
                 
                 }elseif($type == 3){
                  $ticketwhere = 'AND ticket_assign_to = '.$_SESSION['id'];
                 
                 }
                //  $search = $_GET['search']['value'];
                 $draw = $_GET['draw'];  
                 $offset = $_GET['start']; 
                 $limit = $_GET['length']; // Rows display per page
                 $columnIndex = $_GET['order'][0]['column']; // Column index
                 $columnName = $_GET['columns'][$columnIndex]['data']; // Column name
                 $columnSortOrder = $_GET['order'][0]['dir']; // asc or desc
                 $searchValue = mysqli_real_escape_string($conn,$_GET['search']['value']); // Search value
           
                $search='';
                if(isset($searchValue)){

                  $search =" and (ticket_number LIKE '%".$searchValue."%' OR ticket_short_discrip LIKE '%".$searchValue."%') ";
                }
                   
                ## Fetch records
                          $order = "order by ".$columnName." ".$columnSortOrder." ";
                          $offset_limit = " limit ".$offset.",".$limit;
              
                        $Allfield =' * ';
                          $incidentQuery = "select %s from ticket_incident WHERE 1 
                          %s /*seach*/
                          %s  /* role*/
                          %s  /*order*/
                          %s /*limit*/";
                          $empQuery = sprintf($incidentQuery,$Allfield,$search,$ticketwhere,$order,$offset_limit);
                        //  echo$empQuery;
                        //  exit;
                          $empRecords = mysqli_query($conn, $empQuery);
                         
                          // GET DATA FROM DATABASE
                          $data = array();
                          
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

                          $AllCountField =' COUNT(1) as Total';
                          // SEARCH
                          $empQueryTotalCount = sprintf($incidentQuery,$AllCountField,'',$ticketwhere,$order,'');
                          $empQueryTotalCountRecords = mysqli_query($conn, $empQueryTotalCount);
                          $recordsTotal = 0;
                          while($AllCountFieldRow = mysqli_fetch_assoc($empQueryTotalCountRecords)){
                            $recordsTotal = $AllCountFieldRow['Total'];
                           
                          }
                          $AllFilerCount =' COUNT(1) as Total';
                          // SEARCH
                          $empQueryFiterTotalCount = sprintf($incidentQuery,$AllFilerCount,$search,$ticketwhere,$order,'');
                          $empQueryFiterTotalCountRecords = mysqli_query($conn, $empQueryFiterTotalCount);
                          $recordsFiltered = 0;
                          while($AllCountFieldRow = mysqli_fetch_assoc($empQueryFiterTotalCountRecords)){
                            $recordsFiltered = $AllCountFieldRow['Total'];
                           
                          }
                    ## Response
                      $response = array(
                        "draw" => intval($draw),
                        "recordsTotal" => $recordsTotal,
                        "recordsFiltered" => $recordsFiltered,
                        "data" => $data
                      );
                    echo json_encode($response);
                  ?>