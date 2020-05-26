<?php

    session_start();
	include('../service/db.php');
	
	if(isset($_POST['submit6'])){
		$p_name = trim($_REQUEST['name']);
		$p_password = trim($_REQUEST['pwd']);
		$email = trim($_REQUEST['email']);
		$dob = $_REQUEST['dob'];
		$bldgrp = $_REQUEST['bloodGrp'];
		$gender = $_REQUEST['gender'];
		$occupation = $_REQUEST['occup'];
		$salary = $_REQUEST['salary'];
		$type="parent";
		
		
		
		$photo=$_FILES['photo']['name'];
		$avatar_tmpName=$_FILES['photo']['tmp_name'];
		$location="../upload/";
		move_uploaded_file($avatar_tmpName,$location."$photo");

		
/*
		$sql2 = "select username from users where username='{$username}'";
		$result = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($result);
		if($row[]){
		}*/
        $conn = getConnection();
		$sql = "insert into parent VALUES('','{$p_name}','{$p_password}','{$email}','{$dob}','{$bldgrp}','{$gender}','{$occupation}', '{$salary}','{$photo}','{$type}')";
		if(mysqli_query($conn, $sql)){
			echo "Parents Registration done!";
		}else{
			echo "Error";
		}
	}
	?>
	