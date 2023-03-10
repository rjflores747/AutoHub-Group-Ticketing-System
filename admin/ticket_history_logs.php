
<div class="container">
<div class="row">
    <!-- <div class="col-md-6"> -->
        <h4>History Logs</h4>
        <hr>
        <table id="example1" class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Activity Uid</th>
                    <th>Activity Name</th>
                    <th>Activity Created On</th>

                </tr>
            </thead>
            <tbody>
                    <?php
                    require_once '../connect.php';
                    $rolelistqry="SELECT * FROM `ticket_activity_logs` ORDER BY `id`DESC;";
                    $rolelistres=mysqli_query($conn,$rolelistqry);
                    while ($roledata=mysqli_fetch_assoc($rolelistres)) {
                    ?>
                    <tr>
                        <td><?php echo $roledata['id'];?></td>
                        <td><?php echo $roledata['ticket_activity_uid'];?></td>
                        <td><?php echo $roledata['ticket_activity_name'];?></td>
                        <td><?php echo $roledata['ticket_activity_created_on'];?></td>

                        
                        </tr>
                    <?php
                    }
                    ?>
                
            </tbody>
        </table>
    <!-- </div> -->

    <!-- <div class="col-md-6">
        <h4>Permission Add</h4>
        <hr>
        <form method="post" action="../admin/ticket_permission_db.php">
        <div class="form-group">
                <input type="text" name="Permission_id" placeholder="Permission id" class="form-control" />
            </div>
            <div class="form-group">
                <input type="text" name="Permission_name" placeholder="Permission Name" class="form-control" />
            </div>
            <div class="form-group">
                <input type="text" name="Permission_status" placeholder="Permission Status" class="form-control" />
            </div>
            <div class="form-group">
                <input name="Permission_submit" class="btn btn-primary" type="submit" value="Add Permission"/>
            </div>
        </form>
    </div> -->
</div>
</div>
