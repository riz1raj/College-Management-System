<?php

    session_start();
	include('../service/db.php');
	
	if(isset($_POST['submit27'])){
		$c_name = trim($_REQUEST['cname']);
		$t_name = trim($_REQUEST['sname']);
		
		
/*
		$sql2 = "select username from users where username='{$username}'";
		$result = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($result);
		if($row[]){
		}*/
        $conn = getConnection();
		$sql = "insert into admitcourse VALUES('','{$c_name}','{$t_name}')";
		if(mysqli_query($conn, $sql)){
			echo "Teacher Section Registration Done For Student";
		}else{
			echo "Error";
		}
	}
	?>		
		
	

		

	