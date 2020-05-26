<?php   
    session_start();
    include '../service/config.php';
    
?>

<?php
 
// Attempt select query execution
 $id = $_SESSION['user2']['student_id'];
$sql = "SELECT * FROM contactteacher";
echo "<html>
    <head>
        <title>Contact Teacher</title>
    </head>
     <center>
    <fieldset>
        
       <legend><h1><span>Teacher's  Emails and Phone Number's</span></h1></legend>";
       echo "<table border='1' width='400px' cellspacing='0'>";
            echo "<thead><tr>";
                echo "<th>Name</th>";
                echo "<th>Email</th>";
                echo "<th>Phone Number</th>";
                
            
            echo "</tr></thead><tbody>";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td><center>". $row['name'] ."</center></td>";
                echo "<td><center>". $row['email'] ."</center></td>";
                echo "<td><center>". $row['phone'] ."</center></td>";
            echo "</tr>";
        }
        
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
echo "</tbody></table>";
        echo "</fieldset>";
 echo "<br>";
 echo "<br>";
 echo "<center><a href='student.php'><b>Student Page</b></a></center><br>";
// Close connection
mysqli_close($conn);
?>
