<!DOCTYPE html>
<html>
   <head>
      <title>PHP populate dynamic dropdown example</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <style>
         .form_container{
         border:1px solid grey;
         background-color: #F8F9F9;
         margin: 5%;
         padding: 2%;
         border-radius: 3px;
         }
      </style>
   </head>
   <body>
      <div class="container" style="width:900px; margin-left: 25%;">
         <div class="form_container">
            <h2 align="center">Country State City Dropdown using Ajax in PHP MySQL</h2>
            <br />  
            <div ng-app="myapp" >
               <select name="country" id="country" class="form-control">
                  <option value=""> Select country</option>
                  <?php 
                     require './connect.php';
                     $query= "select * from ticket_deparment order by `ticket_dept_name` ASC";
                     $result= mysqli_query($conn,$query);
                     while ($row= mysqli_fetch_array($result)) { ?>
                  <option value="<?php echo $row['ticket_dept_uid']; ?>"><?php echo $row['ticket_dept_name'] ?></option>
                  <?php } ?>
               </select>
               <br/>
               <select name="state" class="form-control" id="state">
                  <option value=""> Select state</option>
               </select>
               <br/>
               <select name="city" id="city" ng-model="city" class="form-control" >
                  <option value=""> Select city</option>
                  <option ng-repeat="city in cities" value="{{city.id}}}">{{city.name}}</option>
               </select>
            </div>
         </div>
      </div>
      </div>    
   </body>
</html>
<script>
   $(document).ready(function(){
 
    $("#country").change(function(){
      var country_id = this.value;
      $.ajax({
      url: "state.php",
      type: "POST",
      data: {
      country_id: country_id
      },
      cache: false,
      success: function(result){     
        $("#state").html(result);
        $('#city').html('<option value="">Select State First</option>'); 
      }
      });    
    });   
    
    $("#state").change(function(){
      var state_id = this.value;
      $.ajax({
      url: "city.php",
      type: "POST",
      data: {
      state_id: state_id
      },
      cache: false,
      success: function(result){
        $("#city").html(result);   
      }
      });    
    });
   });
</script>