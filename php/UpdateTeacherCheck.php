


<?php

    
	include('../service/db.php');
	
	if(isset($_POST['submit51'])){
		$t_name = trim($_REQUEST['name']);
		$t_password = trim($_REQUEST['pwd']);
		$email = trim($_REQUEST['email']);
		$dob = $_REQUEST['dob'];
		$bldgrp = $_REQUEST['bloodGrp'];
		$gender = $_REQUEST['gender'];
		$salary = $_REQUEST['salary'];
		$dept = $_REQUEST['dept'];
		$status = $_REQUEST['tmarry'];
		
		$photo=$_FILES['photo']['name'];
		$avatar_tmpName=$_FILES['photo']['tmp_name'];
		$location="../upload/";
		move_uploaded_file($avatar_tmpName,$location."$photo");
		
		$t_id= $_REQUEST['t_id'];
		
		
		

		
/*
		$sql2 = "select username from users where username='{$username}'";
		$result = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($result);
		if($row[]){
		}*/
        $conn = getConnection();
	if(!empty($_FILES['photo']['name'])){
		$sql= "UPDATE teacher SET t_name='$t_name', t_password='$t_password',email='$email',dob='$dob',bldgrp='$bldgrp',
		        gender='$gender',salary='$salary',dept='$dept',status='$status',photo='$photo' WHERE t_id='$t_id'";
	}
	else{
		$sql= "UPDATE teacher SET t_name='$t_name', t_password='$t_password',email='$email',dob='$dob',bldgrp='$bldgrp',
		        gender='$gender',salary='$salary',dept='$dept',status='$status' WHERE t_id='$t_id'";
	}
		if(mysqli_query($conn, $sql)){
			header("location:../views/ManipulateUser.php?edited");
		}else{
			echo "Error";
		}
	}
	?>
	