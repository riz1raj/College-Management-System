<?php

    session_start();
	include('../service/db.php');
	
	if(isset($_POST['submit5'])){
		$t_name = trim($_REQUEST['name']);
		$t_password = trim($_REQUEST['pwd']);
		$email = trim($_REQUEST['email']);
		$dob = $_REQUEST['dob'];
		$bldgrp = $_REQUEST['bloodGrp'];
		$gender = $_REQUEST['gender'];
		$salary = $_REQUEST['salary'];
		$dept = $_REQUEST['dept'];
		$status = $_REQUEST['tmarry'];
		$type="teacher";
		
		
		
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
		$sql = "insert into teacher VALUES('','{$t_name}','{$t_password}','{$email}','{$dob}','{$bldgrp}','{$gender}','{$salary}', '{$dept}', '{$status}','{$photo}','{$type}')";
		if(mysqli_query($conn, $sql)){
			echo "Teachers Registration done!";
		}else{
			echo "Error";
		}
	}
	?>
	