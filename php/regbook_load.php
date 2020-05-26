<?php
session_start();
$id = $_SESSION['user2']['student_id'];
$name = $_SESSION['user2']['student_name'];
//$name = $_SESSION['s_name'];
include '../service/config.php';
include_once '../service/db.php';
$sql = "SELECT * FROM selectbook WHERE s_name = '$name'";
$result= mysqli_query($conn,$sql) or die("book query faild");
$output = "";
if(mysqli_num_rows($result) > 0){
    $output = '<table border="1" width="400px" cellspacing="0">  
    <thead>
    <tr>
    <th>Sl No</th>
    <th>Book Name</th>
    <th>Book image</th>
    <th>DELETE</th>
    </tr>
    </thead>   
    <tbody>';
    $count = 1;
    while($row = mysqli_fetch_assoc($result)){
        $output .= "<tr>
        <td align='center'>{$count}</td>
        <td align='center'>{$row["b_name"]}</td>
        <td align='center'>";
        $sql1 = "SELECT * FROM book WHERE b_name = '{$row["b_name"]}'";
        $result1 = mysqli_query($conn, $sql1) or die("query faild");
       if(mysqli_num_rows($result1) > 0 ){
            $row1 = mysqli_fetch_assoc($result1);
            $output .= '<img width="60" src="../image/'.$row1['photo'].'">';
        }
        $output .= "</td>
        <td align='center'><button id='deleteBtn' data-id='{$row["b_id"]}'>X</button></td>
        </tr>";
        $count++;
    }
    $output .= '</tbody>
    </table>';
    echo $output;
}else{
    echo "book not found!";
}

?>