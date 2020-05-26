<?php   
    session_start();
    include '../service/config.php';
   
?>

<?php
 
// Attempt select query execution
 $id = $_SESSION['user2']['student_id'];
$sql = "SELECT * FROM notice";
echo "<html>
    <head>
        <title>Notices</title>
    </head>

        <center>
    <fieldset>
        
        <legend><h1><span>Notices By Officials</span></h1></legend>";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='1' width='400px' cellspacing='0'>";
            echo "<tr>";
                echo "<th>Date</th>";
                
                echo "<th>Title</th>";
                
                echo "<th>Content</th>";
                
            
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" ."<center>". $row['date'] ."</center>". "</td>";
               
                echo "<td>" ."<center>". $row['title'] ."</center>"."</td>";
                
                echo "<td>" ."<center>". $row['content'] ."</center>". "</td>";
            echo "</tr>";
        }
        echo "</fieldset>";
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 echo "<br>";
 echo "<br>";
 echo "<center><a href='student.php'><b>Student Page</b></a></center><br>";
// Close connection
mysqli_close($conn);
?>