<?php  
 //select.php  
 $output = '';  
 $connect = mysqli_connect("localhost", "root", "", "autohub-ticketing");  
 if(isset($_POST["action"]))  
 {  
      $procedure = "  
      CREATE PROCEDURE ticket_incident()  
      BEGIN  
      SELECT * FROM ticket_incident;  
      END;  
      ";  
      if(mysqli_query($connect, "DROP PROCEDURE IF EXISTS ticket_incident"))  
      {  
           if(mysqli_query($connect, $procedure))  
           {  
                $query = "CALL ticket_incident()";  
                $result = mysqli_query($connect, $query);  
                $output .= '  
                     <table class="table table-striped">  
                          <tr>  
                               <th width="20%">Student\'s Name</th>  
                               <th width="20%">Father\'s Name</th>  
                               <th width="20%">School\'s Name</th>  
                               <th width="14%">Roll#</th>  
                               <th width="10%">Class</th>  
                               <th width="8%">Update</th>  
                               <th width="8%">Delete</th>  
                          </tr>  
                ';  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                          $output .= '  
                               <tr>  
                                    <td>'.$row["StdName"].'</td>  
                                    <td>'.$row["FatherName"].'</td>  
                                    <td>'.$row["SchoolName"].'</td>  
                                    <td>'.$row["RollNo"].'</td>  
                                    <td>'.$row["Class"].'</td>  
                                    <td><button type="button" name="update" id="'.$row["RollNo"].'" class="update btn btn-success btn-xs">Update</button></td>  
                                    <td><button type="button" name="delete" id="'.$row["RollNo"].'" class="delete btn btn-danger btn-xs">Delete</button></td>  
                               </tr>  
                          ';  
                     }  
                }  
                else 
                {  
                     $output .= '  
                          <tr>  
                               <td colspan="4">Data not Found</td>  
                          </tr>  
                     ';  
                }  
                $output .= '</table>';  
                echo $output;  
           }  
      }  
 }  
 ?>  