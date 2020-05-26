<?php
include '../service/config.php';
if(isset($_POST['submit'])){

 $name=$_POST['sname'];
 $id=$_POST['id'];
 $pwd=$_POST['pwd'];
 $email=$_POST['email'];
 $dob = $_POST['dob'];   
 $gender = $_POST['gender'];
 $dept = $_POST['dept'];
 $bldgrp=$_POST['blood_grp'];



$sql1 = "SELECT * FROM student_data WHERE student_id = '$id' OR student_email = '$email'";
$result1 = mysqli_query($conn,$sql1) or die("query faild");

if(mysqli_num_rows($result1) > 0){
  header("location: ../views/reg.php?success=0");
}else{

  $sql = "INSERT INTO `student_data` (`student_name`, `student_id`, `student_pwd`, `student_gender`, `student_email`, `student_dob`, `student_dept`, `student_bldgrp`) VALUES ('$name', '$id', '$pwd', '$gender', '$email', '$dob', '$dept', '$bldgrp')";

 $result = mysqli_query($conn, $sql) or die("reg query faild");

 if($result){
   header("location: ../index.php?success=1");
 }

}



}else {
    header("location: ../index.php");
}   
?>