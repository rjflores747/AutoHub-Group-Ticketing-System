<div class="container">
   
<h4>My active tickets </h4>

<hr>
<table id="example1" class="table table-bordered">
  <thead>
    <tr>
    <th>Id</th>
      <th>Ticket Number</th>
      <th>Subject</th>
      <th>Description</th>
      <th>Status</th>
      <th>Action </th>



    </tr>
  </thead>
  <tbody>
      <?php
      require_once '../connect.php';
    
      $rolelistqry="SELECT * FROM ticket_incident  where u_id ='".$_SESSION['id']."' ";
      $rolelistres=mysqli_query($conn,$rolelistqry);
      while ($roledata=mysqli_fetch_assoc($rolelistres)) {
      ?>
      <tr>
        <td><?php echo $roledata['id'];?></td>
        <td><?php echo $roledata['ticket_number'];?></td>
        <td><?php echo $roledata['ticket_short_discrip'];?></td>
        <td><?php echo $roledata['ticket_discription'];?></td>
       
        <td>
          <?php  if ($roledata["ticket_status"] == 1) {
              echo '<span class="badge badge-primary">In Progress</span>';
            }else if ($roledata["ticket_status"] == 2){
              echo '<span class="badge badge-danger">Close</span>';
            }else if ($roledata["ticket_status"] == 3){
              echo '<span class="badge badge-success">New</span>' ;
            } else {
                echo "Inactive";
            }
          ?></td>
        <td>
          
          <a href="../admin/ticket_details_container.php?id=<?php echo $roledata['id'];?>" class="m-1 btn btn-sm btn-warning btn-icon"><i class="fas fa-eye"></i></a>
        
          <a href="../admin/ticket_update_incident_container.php?id=<?php echo $roledata['id'];?>" class="m-1 btn btn-sm btn-primary btn-icon"><i class="fas fa-pen"></i></a>
        
          <a data-action-remove="<?php echo $roledata['id'];?>" style="cursor:pointer;" class="m-1 btn btn-sm btn-danger btn-icon" title="Remove"><i class="fa fa-trash"></i></a>
          <!-- <button type="button" class="btn btn-danger btn-icon" data-toggle="modal" data-target="#myModal" data-id="<?php echo $roledata['id'];?>" onclick="confirmDelete(this);"><i class="fa fa-trash"></i></button> -->
          <!-- <button type="button" class="btn btn-danger" data-id="<?php echo $roledata['id']; ?>" onclick="confirmDelete(this);">Delete</button> -->
          
        </td>
        </tr>
        
      <?php
      }
      ?>
    
  </tbody>
</table>

</div>
