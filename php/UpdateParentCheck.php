


<?php

    
	include('../service/db.php');
	
	if(isset($_POST['submit52'])){
		$p_name = trim($_REQUEST['name']);
		$p_password = trim($_REQUEST['pwd']);
		$email = trim($_REQUEST['email']);
		$dob = $_REQUEST['dob'];
		$bldgrp = $_REQUEST['bloodGrp'];
		$gender = $_REQUEST['gender'];
		$occupation = $_REQUEST['occup'];
		$salary = $_REQUEST['salary'];
		
		$photo=$_FILES['photo']['name'];
		$avatar_tmpName=$_FILES['photo']['tmp_name'];
		$location="../upload/";
		move_uploaded_file($avatar_tmpName,$location."$photo");
		
		$p_id= $_REQUEST['p_id'];
		
		
		

		
/*
		$sql2 = "select username from users where username='{$username}'";
		$result = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($result);
		if($row[]){
		}*/
        $conn = getConnection();
	if(!empty($_FILES['photo']['name'])){
		$sql= "UPDATE parent SET p_name='$p_name', p_password='$p_password',email='$email',dob='$dob',bldgrp='$bldgrp',
		        gender='$gender',occupation='$occupation',salary='$salary',photo='$photo' WHERE p_id='$p_id'";
	}
	else{
		$sql= "UPDATE parent SET p_name='$p_name', p_password='$p_password',email='$email',dob='$dob',bldgrp='$bldgrp',
		        gender='$gender',occupation='$occupation',salary='$salary' WHERE p_id='$p_id'";
	}
		if(mysqli_query($conn, $sql)){
			header("location:../views/ManipulateUser.php?edited");
		}else{
			echo "Error";
		}
	}
	?>
	