<?php
session_start();
include '../services/config.php';
//require_once '../service/db.php';
if(isset($_POST['c_name']) && !$_POST['c_name'] == ""){
   

    $cname = trim($_REQUEST['cname']);
	$sname = trim($_REQUEST['user2']['sname']);
   // $id = $_SESSION['student_id'];
    
    
    $sql = "insert into selectcourse VALUES('','{$cname}','{$sname}')";;
    $result = mysqli_query($conn,$sql) or die("somthing woring!");
    if($result){
        echo '<b id="msg" style="color:green">Course added successfully</b>';
    }
   
}else{
    echo '<b id="msg" style="color:red">input is empty</b>';
}
?>