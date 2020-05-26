<?php

    session_start();
	include('../service/db.php');
	
	if(isset($_POST['submit25'])){
		$c_name = trim($_REQUEST['name']);
		$time = trim($_REQUEST['time']);
		
		
/*
		$sql2 = "select username from users where username='{$username}'";
		$result = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($result);
		if($row[]){
		}*/
        $conn = getConnection();
		$sql = "insert into course VALUES('','{$c_name}','{$time}')";
		if(mysqli_query($conn, $sql)){
			echo "Course Info Entered";
		}else{
			echo "Error";
		}
	}
	?>		
		
	

		

	