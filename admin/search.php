<?php  
//  $conn = mysqli_connect("localhost", "root", "", "autohub-ticketing");  
 $conn = mysqli_connect("ticketing-system.adrianpusana.com", "syofdjax_alberto_flores", "v,O@0OngL;}g", "syofdjax_ticketing");  
// require_once './connect.php';
// require_once './connect.php';
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM ticket_suggestions WHERE suggestions_name LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($conn, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                 
                

                $output .= '<ul class="ul-main">' .'<li class="li-main">'.$row["suggestions_name"] .'</li>' .$row["suggestions_description"] .'</ul>';  
               //  $output .= '<li>' . .'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<ul class="ul-main">'.' <li class="li-main" readonly="readonly"> Not Found</li>'.'</ul>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  