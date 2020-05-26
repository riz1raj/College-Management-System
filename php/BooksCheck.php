<?php

    session_start();
	include('../service/db.php');
	
	if(isset($_POST['submit28'])){
		$b_name = trim($_REQUEST['bname']);
		$b_author = trim($_REQUEST['bauthor']);
		 
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
		$sql = "insert into book VALUES('','{$b_name}','{$b_author}','{$photo}')";
		if(mysqli_query($conn, $sql)){
			echo "Book is Recorded in College Directory";
		}else{
			echo "Error";
		}
	}
	?>		
		
	

		

	