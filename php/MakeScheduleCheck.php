<?php

    session_start();
	include('../service/db.php');
	
	if(isset($_POST['submit29'])){
		
		$e_date = $_REQUEST['edate'];
		$e_time = $_REQUEST['etime'];
		$c_name = $_REQUEST['cname'];
		$e_duration = trim($_REQUEST['eduration']);
		 
		
		
		
/*
		$sql2 = "select username from users where username='{$username}'";
		$result = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($result);
		if($row[]){
		}*/
        $conn = getConnection();
		$sql = "insert into examschedule VALUES('','{$e_date}','{$e_time}','{$c_name}','{$e_duration}')";
		if(mysqli_query($conn, $sql)){
			echo "Exam Schedule is prepeared for publication";
		}else{
			echo "Error";
		}
	}
	?>		
		
	

		

	