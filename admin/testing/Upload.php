<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>upload</title>
</head>
<body>
   
   <?php
    $conn = mysqli_connect('localhost','root','','autohub-ticketing');
    // require_once '../connect.php';
    if(isset($_POST['submit'])){
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $path = "files/".$fileName;

        $query = "INSERT INTO ticket_files(path,createAt) VALUES ('$fileName',NOW())";
        $run = mysqli_query($conn,$query);
        
        if($run){
            move_uploaded_file($fileTmpName,$path);
            echo "success";
        }
        else{
            echo "error".mysqli_error($conn);
        }
        
    }
    
    ?>
   
   <table border="1px" align="center">
       <tr>
           <td>
               <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="file">
                    <button type="submit" name="submit"> Upload</button>
                </form>
           </td>
       </tr>
       <tr>
           <td>
              <?php                          
               $query2 = "SELECT * FROM `ticket_files`";
               $run2 = mysqli_query($conn,$query2);
               
               while($rows = mysqli_fetch_assoc($run2)){
                   ?>
               <a href="download.php?file=<?php echo $rows['path'] ?>">Download</a><br>
               <?php
               }
               ?>
           </td>
       </tr>
   </table>
    
</body>
</html>
