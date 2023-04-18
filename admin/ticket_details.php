 <?php 
 require_once '../connect.php';
  if (isset($_GET['id'])) {
  $lastId = $_GET['id'];

  $creatTk="SELECT * FROM ticket_incident WHERE id= '".$lastId."'";
  $query_run = mysqli_query($conn,$creatTk);
  $row = mysqli_fetch_array($query_run);
    // echo'last number <h1>'.$lastId. '</h1> ';
  // if (!isset($_SESSION["id"])) {
  // header("Location: index.php");
  // exit();
 
// }
}


if(count($_POST)>0) {
mysqli_query($conn,"UPDATE ticket_incident set
 id='" . $_POST['update_status_id'] . "', 
 ticket_timeofdate_end =NOW(), 
 ticket_status ='" . $_POST['statusText'] . "' WHERE id='" . $_POST['update_status_id'] . "'");
 // Insert visitor activity log into database 
 $ActivityLogs = mysqli_query($conn,"INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('".$_SESSION['u_id']."','You have successfully updated' ,NOW())");

 $message = "Record Modified Successfully";
}
// getting data into id of table
$result = mysqli_query($conn,"SELECT * FROM ticket_incident WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

// // getting data into id of table




// rating for the users
$resultrating = mysqli_query($conn,"SELECT * FROM ticket_rating WHERE rating_ticket_id ='" . $_GET['id'] . "'");
 $ticket_rating='0';

while ($rowrating= mysqli_fetch_array($resultrating)) {
    $ticket_rating = $rowrating['rating_user_rate'];
 
   
 } 
//  echo 'sample'.$ticket_rating;
 
//  exit;

 ?>
 
 <!-- Main content -->
 <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Ticket Detail</h3>

      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
            <div class="row">
              <div class="col-12 col-sm-12">
                <div class="info-box bg-light">
                  <div class="info-box-content">

                    <?php include '../admin/ticket_chat_time_line.php'; ?>
                    <!-- SEND MESSAGE  -->
                    <div class="input-group ">
                        <input type="text"
                              placeholder="Type Message..."
                              id="messageText"
                              class="form-control">
                        <button class="btn btn-primary" 
                                id="messagebtn" name="Send" >
                               	Send
                        </button>       
                  </div>
                  </div>
                </div>
              </div>
              
             
            
            </div>
          
          </div>
          <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
          <div class="col-12 col-sm-12">
                <div class="info-box bg-light">
                  <div class="info-box-content">
                    <span class="info-box-text text-center text-muted">Your Request Has been Submitted</span>
                    <hr>
                    
                    <span class="info-box-number text-left  mb-0">TicketNo#: <?php echo $row['ticket_number'];?>
                    </span>
                    <span class="info-box-number text-left  mb-0">Status:
                    <?php 
                           if($row['ticket_status'] == 'Open'){

                            echo '<span class="badge badge-info">Open</span>';
                          }else if($row['ticket_status'] == '2' ){
    
                            echo'<span class="badge badge-danger">Close</span>' ;
                          }else if($row['ticket_status'] == '3' ){
    
                            echo '<span class="badge badge-success">New</span>' ;
                          }else if($row['ticket_status'] == 'Pending'){
    
                            echo '<span class="badge badge-warning">Pending</span> ';
                          }else if($row['ticket_status'] == 'Success' ){
                            echo '<span class="badge badge-success">Success</span>';
    
                          }else if($row['ticket_status'] == '1' ){
    
                            echo '<span class="badge badge-primary">In Progress</span>';
                          }
                    ?> </span>
              
                    <span class="info-box-number text-left  mb-0">Priority: <?php echo $row['ticket_priority'];?> </span>
                    <span class="info-box-number text-left  mb-0">Assginee :
                       <?php  
                                        $assignto =  $row['ticket_assign_to'];
                                      
                                        $ticketDeptAssign = mysqli_query($conn,"SELECT * FROM  ticket_user WHERE id='" .$assignto. "'");
                                        $rowticketDeptAssign= mysqli_fetch_array($ticketDeptAssign);
                                         
                                        if(!empty($rowticketDeptAssign)){
                                          echo $rowticketDeptAssign['ticket_fn']." ".$rowticketDeptAssign['ticket_ln'];
                                        }else{
                                          echo 'Unassigned';
                                        }
               
                    ?></span>
                    <span class="info-box-number text-left  mb-0">Created: <?php echo $row['ticket_timeofdate'];?></span>
                    <span class="info-box-number text-left  mb-0">Date End: <?php echo $row['ticket_timeofdate_end'];?></span>
                    <hr>
                    <span class="info-box-number text-left">Please Describe your issue below.  <h6><?php echo $row['ticket_short_discrip'];?></h6>
                    <form name="updatestatus" method="post" action="">
                    <input type="hidden" name="update_status_id"  value="<?php echo $row['id']; ?>" id="update_status_id">
                  <!-- star rating -->
                  <?php if($row['ticket_status'] == '2'){?>
                    <div class="rateYo" id= "rateYo"
                      data-rateyo-num-stars="5"> 
                      </div>
                  
                  <?php
                  }?>
             <!-- end star rating -->


                    <?php 
                      if($_SESSION['ticket_user_role'] == '1'||$_SESSION['ticket_user_role'] == '2'){?>
                       <span class="info-box-number text-left  mb-0">Status#:
                          <div class="select2-purple">
                            <select class="form-control select2bs4" id="statusText" name="statusText" style="width: 70%;">
                                <option value="" style="text-align:center">----- SELECT STATUS -----</option>
                                    <?php 
                                      
                                        $query= "SELECT * from ticket_status 
                                        order by ticket_status_name ASC";
                                        $result1= mysqli_query($conn,$query);
                                       
                                        while ($statusrow = mysqli_fetch_array($result1)) { 

                                          if($row['ticket_status'] == $statusrow['ticket_status_id'] ){
                                          ?>  
                                          <option selected value="<?php echo $statusrow['ticket_status_id']; ?>"><?php echo $statusrow['ticket_status_name'] ?></option>
                                          <?php
                                          
                                          }
                                          else
                                          {
                                            ?>  
                                          <option  value="<?php echo $statusrow['ticket_status_id']; ?>"><?php echo $statusrow['ticket_status_name'] ?></option>
                                          <?php
                                          }?>
                         
                                    <?php } ?>
                            </select>
                          </div><br>
                          <button class="btn btn-primary" 
                                id="Updatestatu" name="Updatestatu" >
                                <i class="fas fa-user-edit"></i>	Update
                        </button>
                      </span>
                      <?php
                      }

                      ?>
                        
                    </form>
                  </div>
                </div>
              </div>
            <br>
            <div class="text-muted">
              <!-- <p class="text-sm">Client Company
                <b class="d-block">Deveint Inc</b>
              </p> -->
              <p class="text-sm">Project Leader
                <b class="d-block"> <?php echo $row['ticket_caller'];?> </b>
              </p>
            </div>

            <h5 class="mt-5 text-muted">Project files</h5>
             <?php
                          // $conn = mysqli_connect('localhost','root','','autohub-ticketing');
                          // require_once '../connect.php';

                          // if(isset($_POST['submit'])){
                          //   if(count($_POST)>0) {
                          //     // $fileName = basename($_FILES['file']['name']);
                          //     // $fileTmpName = $_FILES['file']['tmp_name'];
                          //     // $path = "../uploads/".$fileName;

                          //     // if(file_exists($fileName))
                          //     // {
                          //     //   echo "Unable to locate folder";
                          //     //   exit();

                          //     // }
                          //     // else
                          //     // {
                          //       // $old_file = $_FILES['file']['name'];
                          //       // $new_file = substr($_FILES['file']['name'], 0,40);
                          //       // if(@move_uploaded_file($_FILES['file']['name'], $fileName.'-'.$new_file))
                          //       // {


                          //       // }
                          //       // else{
                          //       //     echo "Unable to Uploaded file! ";

                          //       //     exit();
                          //       // }
                          //       $temp = explode(".", $_FILES["file"]["name"]);
                          //       $newfilename = round(microtime(true)) . '.' . end($temp);
                          //       move_uploaded_file($_FILES["file"]["tmp_name"], "../uploads/" . $newfilename);
                          //           $query = "INSERT INTO ticket_files(ticket_number,path,createAt) VALUES ('$lastId','$newfilename',NOW())";
                          //           $run = mysqli_query($conn,$query);   


                          //     // print_r($query);
                          //     // exit();

                          //     if($run){
                          //       // move_uploaded_file($newfilename,$path);
                          //       // echo "success";
                          //      $message = "Record Modified Successfully";

                          //         }
                          //         else{
                          //             echo "error".mysqli_error($conn);
                          //         }

                          // }

                          if (count($_POST) > 0) {
  //                           mysqli_query($conn, "UPDATE ticket_incident set
  //  id='" . $_POST['update_status_id'] . "', 
  //  ticket_timeofdate_end =NOW(), 
  //  ticket_status ='" . $_POST['statusText'] . "' WHERE id='" . $_POST['update_status_id'] . "'");
  //                           // Insert visitor activity log into database 
  //                           $ActivityLogs = mysqli_query($conn, "INSERT INTO `ticket_activity_logs`(`ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES ('" . $_SESSION['u_id'] . "','You have successfully updated' ,NOW())");

                            $temp = explode(".", $_FILES["file"]["name"]);
                            $newfilename = round(microtime(true)) . '.' . end($temp);
                            move_uploaded_file($_FILES["file"]["tmp_name"], "../uploads/" . $newfilename);
                            mysqli_query($conn, "INSERT INTO ticket_files(ticket_number,path,createAt) VALUES ('$lastId','$newfilename',NOW())");


                            $message = "Record Modified Successfully";
                          }
                
                ?>
              
              <table border="1px" align="center">
                  <tr>
                      <td>
                          <form action=" method="post" enctype="multipart/form-data">
                          <br>
                                <input type="file" class="btn btn-warning"  name="file"><br><br>

                                <button type="submit" class="btn btn-success" name="submit"><i class="fa fa-upload"></i> Upload</button>
                            </form>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <?php
                          $query2 = "SELECT * FROM `ticket_files` WHERE ticket_number ='" . $lastId . "'";
                          $run2 = mysqli_query($conn,$query2);
                          
                          while($rows = mysqli_fetch_assoc($run2)){
                              ?>
                          <a href="download.php?file=<?php echo $rows['path'] ?>"><i class="fas fa-download"></i> Download</a><br>
                          <?php
                          }
                          ?>
                      </td>
                  </tr>
              </table>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->