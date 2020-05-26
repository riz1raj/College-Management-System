<?php

    session_start();
	include('../service/db.php');
	
	if(isset($_POST['submit30'])){
		
		$ad_test = $_REQUEST['a_test'];
		$ad_form = $_REQUEST['a_form'];
		$ad_fee = trim($_REQUEST['a_fee']);
		$start = trim($_REQUEST['start']);
		 
		
		
		
/*
		$sql2 = "select username from users where username='{$username}'";
		$result = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($result);
		if($row[]){
		}*/
        $conn = getConnection();
		$sql = "insert into admission VALUES('','{$ad_test}','{$ad_form}','{$ad_fee}','{$start}')";
		if(mysqli_query($conn, $sql)){
			echo "Admission Info Entered";
		}else{
			echo "Error";
		}
	}
	?>		
		
	

		

	