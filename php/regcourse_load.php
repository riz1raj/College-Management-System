<?php
session_start();
$id = $_SESSION['user2']['student_id'];
$name = $_SESSION['user2']['student_name'];
//$name = $_SESSION['s_name'];
include '../service/config.php';
include_once '../service/db.php';
$sql = "SELECT * FROM selectcourse WHERE s_name = '$name'";
$result= mysqli_query($conn,$sql) or die("book query faild");
$output = "";
if(mysqli_num_rows($result) > 0){
    $output = '<table border="1" width="400px" cellspacing="0">  
    <thead>
    <tr>
    <th>ID</th>
    <th>Course Name</th>
    <th>Time</th>
    <th>DELETE</th>
    </tr>
    </thead>   
    <tbody>';
    $count = 1;
    while($row = mysqli_fetch_assoc($result)){
        $output .= "<tr>
        <td align='center'>{$count}</td>
        <td align='center'>{$row["c_name"]}</td>
        <td align='center'>";
        $sql1 = "SELECT * FROM course WHERE c_name = '{$row["c_name"]}'";
        $result1 = mysqli_query($conn, $sql1) or die("query faild");
        if(mysqli_num_rows($result1)){
            $row1 = mysqli_fetch_assoc($result1);
            $output .= $row1['time'];
        }
        $output .= "</td>
        <td align='center'><button id='deleteBtn' data-id='{$row["cl_id"]}'>X</button></td>
        </tr>";
        $count++;
    }
    $output .= '</tbody>
    </table>';
    echo $output;
}else{
    echo "course not found!";
}

?>