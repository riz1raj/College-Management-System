<!--
<?php
    session_start();
	include('../service/db.php');
	
	if(isset($_POST['submit'])){
		$username = trim($_REQUEST['username']);
		$sid = trim($_REQUEST['sid']);
		$password = trim($_REQUEST['password']);
		$email = trim($_REQUEST['email']);
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		$bldgrp = $_REQUEST['bloodGrp'];
		$occupation = $_REQUEST['occupation'];
		$salary = $_REQUEST['salary'];
		$type = $_REQUEST['type'];
		
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
		$sql = "insert into parent VALUES('','{$sid}','{$username}','{$password}','{$email}','{$dob}', '{$bldgrp}','{$gender}', '{$occupation}','{$salary}', '{$photo}','{$type}')";
		if(mysqli_query($conn, $sql)){
			echo "Registration done!";
		}else{
			echo "Error";
		}
	}
	?> -->