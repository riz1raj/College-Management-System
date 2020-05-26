<?php
session_start();
include '../service/config.php';
if(isset($_POST['Request']) && !$_POST['Request'] == ""){
    $Request = $_POST['Request'];


    $id = $_SESSION['user2']['student_id'];
     $name = $_SESSION['user2']['student_name'];
    
    $sql = "INSERT INTO `student_update_request`(`student_id`, `student_name`, `student_update_msg`) VALUES ('$id','$name','$Request')";
    $result = mysqli_query($conn,$sql) or die("somthing woring!");
    if($result){
        echo '<b id="msg" style="color:green">Your request send successfully</b>';
    }
   
}else{
    echo '<b id="msg" style="color:red">your request is empty</b>';
}
?>