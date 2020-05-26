<?php

    session_start();
	include('../service/db.php');
	
	if(isset($_POST['submit26'])){
		$cname = trim($_REQUEST['cname']);
		$sname = trim($_REQUEST['sname']);
		
		
/*
		$sql2 = "select username from users where username='{$username}'";
		$result = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($result);
		if($row[]){
		}*/
        $conn = getConnection();
		$sql = "insert into selectcourse VALUES('','{$cname}','{$sname}')";
		if(mysqli_query($conn, $sql)){
			echo "Course Registration Done For Student";
		}else{
			echo "Error";
		}
	}
	?>		
		
	

		

	