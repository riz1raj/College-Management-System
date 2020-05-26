<?php
include '../service/config.php';
?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <style type="text/css">
  
</style>
</head>
<body class="">
  <center>
<?php
if(isset($_GET['pollid'])){

  $sql = "SELECT * FROM poll WHERE id = '{$_GET['pollid']}'";
  $result = mysqli_query($conn, $sql) or die("query faild");
  if($result){
    $row = mysqli_fetch_assoc($result);
    echo "<table border='1' width='400px' cellspacing='0'>";
            echo "<tr>";
                echo "<th><center><h3>".$row['question']."</h3></center></th>";
                
                
            echo "</tr>";
            echo "</table>";
    
    
    $sql1 = "SELECT * FROM poll WHERE q_id = '{$row['id']}'";
    $result1 = mysqli_query($conn,$sql1) or die("Query faild!");
    if(mysqli_num_rows($result1) > 0){
      while($row1 = mysqli_fetch_assoc($result1)){
        echo "<table border='1' width='400px' cellspacing='0'>";
            echo "<tr>";
                echo "<th><center><h3>".$row1['q_option']."<br>".$row1['votes']." People voted"."</h3></center></th>";
                
                
            echo "</tr>";
            echo "</table>";

      
      }
    }
    echo '<center><a href="../poll/index1.php">back poll</a></center>';
    }


}


?>
</center>
</body>
</html>