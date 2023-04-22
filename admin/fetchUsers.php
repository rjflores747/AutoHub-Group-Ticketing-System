<?php 
 
// Include database config file 

// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "autohub-ticketing";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
// Get search term 
$searchTerm = $_GET['term']; 
 
// Get matched data from the database 
$query = "SELECT id, suggestions_name, suggestions_description FROM ticket_suggestions WHERE (suggestions_name LIKE '%".$searchTerm."%' OR suggestions_description LIKE '%".$searchTerm."%') AND suggestions_status = 1 ORDER BY suggestions_name ASC"; 
$result = $db->query($query); 
 
// Generate array with user's data 
$userData = array(); 
if($result->num_rows > 0){ 
    while($row = $result->fetch_assoc()){ 
        $name = $row['suggestions_name']; 
        $suggestions_description = $row['suggestions_description']; 
        
        $data['id']    = $row['id']; 
        $data['value'] = $name; 
        // $data['value'] = $suggestions_description; 
        $data['label'] = ' 
            <a href="javascript:void(0);"> 

               <b> <span>'.$name.'</span></b> <br> 
                <span>'.$suggestions_description.'</span> </br>
            </a> 
        '; 
        array_push($userData, $data); 
    } 
} 
 
// Return results as json encoded array 
echo json_encode($userData); 
 
?>

