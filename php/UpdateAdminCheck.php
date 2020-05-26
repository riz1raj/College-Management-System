


<?php

    session_start();
	include('../service/db.php');
	
	if(isset($_POST['submit53'])){
		$a_name = trim($_REQUEST['name']);
		$a_password = trim($_REQUEST['pwd']);
		$email = trim($_REQUEST['email']);
		$dob = $_REQUEST['dob'];
		$bldgrp = $_REQUEST['bloodGrp'];
		$gender = $_REQUEST['gender'];
		
		
		$photo=$_FILES['photo']['name'];
		$avatar_tmpName=$_FILES['photo']['tmp_name'];
		$location="../upload/";
		move_uploaded_file($avatar_tmpName,$location."$photo");
		
		$a_id= $_REQUEST['a_id'];
		
		
		

		
/*
		$sql2 = "select username from users where username='{$username}'";
		$result = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($result);
		if($row[]){
		}*/
        $conn = getConnection();
	if(!empty($_FILES['photo']['name'])){
		$sql= "UPDATE admin SET a_name='$a_name', a_password='$a_password',email='$email',dob='$dob',bldgrp='$bldgrp',
		        gender='$gender',photo='$photo' WHERE a_id='$a_id'";
	}
	else{
		$sql= "UPDATE admin SET a_name='$a_name', a_password='$a_password',email='$email',dob='$dob',bldgrp='$bldgrp',
		        gender='$gender' WHERE a_id='$a_id'";
	}
		if(mysqli_query($conn, $sql)){
			header("location:../views/ManipulateAdmin.php?edited");
		}else{
			echo "Error";
		}
	}
	?>
	