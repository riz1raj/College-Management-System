<?php
include '../service/config.php';

if(isset($_POST['submit'])){

$id = $_POST['id'];
$name = $_POST['name'];
$dept = $_POST['dept'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$gnumber = $_POST['gnumber'];
$nalty = $_POST['nalty'];
$religion = $_POST['religion'];
$bldgrp = $_POST['bldgrp'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address = $_POST['address'];


if(isset($_FILES['image'])){
    if(!$_FILES['image']['name'] == ""){  
        $name1 = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $image = uniqid().$name1;
        
        if($file_size > 2097152){
            header("location: ../views/profile.php?success=0");
        }else{
            move_uploaded_file($tmp_name,"../student_photo/".$image);
        }
        
        }else{
            echo 'rowng';
        $sql1 = "SELECT * FROM student_data WHERE student_id = '$id'";
        $result1 = mysqli_query($conn, $sql1) or die("image query faild");
        if($result1){
            $row = mysqli_fetch_assoc($result1);
            $image = $row["image"];
        }
        }
}



$sql = "UPDATE `student_data` SET `student_name`='$name',`student_gender`='$gender',`student_dob`='$dob',`student_dept`='$dept',`student_bldgrp`='$bldgrp',`father_name`='$fname',`mother_name`='$mname',`guardian_number`='$gnumber',`nationality`='$nalty',`religion`='$religion',`address`='$address',`image`='$image' WHERE student_id = '{$id}'";

$result = mysqli_query($conn, $sql) or die("update query faild");

if($result){
    header("location: ../views/profile.php?success=1");
}



}else{
    echo 'something wrong!';
}

?>