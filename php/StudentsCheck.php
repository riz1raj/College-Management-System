<?php

    session_start();
	include('../service/db.php');
	
	if(isset($_POST['submit2'])){
		$s_name = trim($_REQUEST['name']);
		$s_password = trim($_REQUEST['pwd']);
		$email = trim($_REQUEST['email']);
		$dob = $_REQUEST['dob'];
		$dept = $_REQUEST['dept'];
		$gender = $_REQUEST['gender'];
		$class = $_REQUEST['class'];
		$adress = $_REQUEST['adress'];
		$type="student";
		
		
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
		$sql = "insert into student VALUES('','{$s_name}','{$s_password}','{$email}','{$dob}','{$dept}','{$gender}','{$class}', '{$adress}','{$photo}','{$type}')";
		if(mysqli_query($conn, $sql)){
			echo "Student Registration done!";
		}else{
			echo "Error";
		}
	}
	?>
	