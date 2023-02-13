
<div class="wrapper">
            <!-- Modal start -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Incident <i class="fa fa-User"></i></button>

                <!-- Modal -->
               <!-- The Modal -->
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                    
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Ticket Incident</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      
                      <!-- Modal body -->
                      <div class="modal-body">
                        
                       <!-- text input ticket no & contacttype -->
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group row">
                            <label for="inputticketNo" class="col-sm-2 col-form-label">Ticket No</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputticketNo" placeholder="TicketNo">
                            </div>
                          </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group row">
                              <label for="contacttype" class="col-sm-2 col-form-label">Contact Type</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="contacttype" placeholder="Contact type">
                              </div>
                            </div>
                          </div>
                        </div>

                         <!-- text input Caller & State -->
                         <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group row">
                            <label for="inputcaller" class="col-sm-2 col-form-label">Caller</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputcaller" placeholder="Caller">
                            </div>
                          </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group row">
                              <label for="inputstate" class="col-sm-2 col-form-label">State</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputstate" placeholder="State">
                              </div>
                            </div>
                          </div>
                        </div>
                          <!-- text input Category & Impact -->
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group row">
                            <label for="inputcategory" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                              <!-- <input type="text" class="form-control" id="inputcategory" placeholder="Category"> -->
                              <select class="form-control select2bs4" style="width: 100%;">
                              <option>----- NONE -----</option>
                              <?php
                                $query = "SELECT * FROM `ticket-category`";
                                $result = mysqli_query($conn,$query);
                                    while ($row1 = mysqli_fetch_array($result)):;?>
                                    <option><?php echo $row1[1];?></option>
                                    <?php endwhile; ?>
                             
                              </select>
                            </div>
                          </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group row">
                              <label for="inputimpact" class="col-sm-2 col-form-label">Impact</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputimpact" placeholder="Impact">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- text input Subcategory & Urgent -->
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group row">
                            <label for="inputsubcategory" class="col-sm-2 col-form-label">Subcategory</label>
                            <div class="col-sm-10">
                              <div class="select2-purple">
                                <select class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                  <option>Albert</option>
                                  <option>Almira</option>
                                  <option>Clarence</option>
                                  <option>Danica</option>
                                  <option>Rolan</option>
                                  <option>Michael</option>
                                  <option>Jean</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group row">
                              <label for="inputurgent" class="col-sm-2 col-form-label">Urgent</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputurgent" placeholder="Urgent">
                              </div>
                            </div>
                          </div>
                        </div>

                         <!-- text input Subcategory & Urgent -->
                         <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group row">
                            <label for="inputService" class="col-sm-2 col-form-label">Service</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputService" placeholder="Service">
                            </div>
                          </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group row">
                              <label for="inputPriority" class="col-sm-2 col-form-label">Priority</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPriority" placeholder="Priority">
                              </div>
                            </div>
                          </div>
                        </div>

                          <!-- text input Configuration & Assignmentgroup -->
                          <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group row">
                            <label for="inputService" class="col-sm-2 col-form-label">Config Item</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputService" placeholder="Service">
                            </div>
                          </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group row">
                              <label for="inputPriority" class="col-sm-2 col-form-label">Deparment</label>
                              <div class="col-sm-10">
                                <!-- <input type="text" class="form-control" id="inputPriority" placeholder="Priority"> -->
                                <div class="select2-purple">
                                <select class="form-control select2bs4" id="tkdepart" style="width: 100%;">
                                  <option>----- NONE DEPARMENT -----</option>
                                    <?php 
                                     
                                      $query= "select * from ticket_deparment order by ticket_dept_name ASC";
                                      $result1= mysqli_query($conn,$query);
                                      while ($row= mysqli_fetch_array($result1)) { ?>
                                    <option value="<?php echo $row['ticket_dept_uid']; ?>"><?php echo $row['ticket_dept_name'] ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- text input Subcategory & Assignmentto -->
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group row">
                            
                            <div class="col-sm-10">
                            
                            </div>
                          </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group row">
                              <label for="inputPriority" class="col-sm-2 col-form-label">Assignment Group</label>
                              <div class="col-sm-10">
                              <div class="select2-purple">
                                  <select class="select2" id="deptgroup" multiple="multiple" data-placeholder="Select a Assignment" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                  <option>----- NONE DEPARMENT -----</option>
                                  
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Submit Ticket</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                      
                    </div>
                  </div>
                </div>
              <!-- Modal close -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">TICKETING</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id #</th>
                    <th>Ticket Number</th>
                    <th>Short Discription</th>
                    <th>Discription</th>
                    <th>Option</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                  <?php                                   
                      $querytable =mysqli_query($conn,"select * from ticket_incident") ;
                      while ($row= mysqli_fetch_array($querytable)) {
                        echo"<tr>";
                        echo"<td>"; echo $row["id"];echo"</td>";
                        echo"<td>"; echo $row["ticket_number"];echo"</td>";
                        echo"<td>"; echo $row["ticket_short_discrip"];echo"</td>";
                        echo"<td>"; echo $row["ticket_discription"];echo"</td>";
                     
                        echo"<td>"; ?> <a href=""> <button type="button" class="btn btn-success"><i class="fa fa-search"></i></button></a>
                         <a href=""> <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a> 
                        <?php  
                        
                        echo"</td>";
                        echo"</tr>";
                      }  
                      ?>

                    <!-- <td><button type="button" class="btn btn-primary" data-dismiss="modal"><i class="bi bi-ticket">view</i></button></td> -->

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<!-- Page specific script -->
<script>
  //for the deparment to deparment assignment
  $(document).ready(function(){
      $("#tkdepart").change(function(){
        var tkdepart_id = this.value;
        $.ajax({
        url: "function_ticket_incident_ajax.php",
        type: "POST",
        data: {
          tkdepart_id: tkdepart_id
        },
        cache: false,
        success: function(result1){     
          $("#deptgroup").html(result1);
    
        }
        });    
      });  
    });
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
