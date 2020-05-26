


<?php

    
	include('../service/db.php');
	
	if(isset($_POST['submit50'])){
		$s_name = trim($_REQUEST['name']);
		$s_password = trim($_REQUEST['pwd']);
		$email = trim($_REQUEST['email']);
		$dob = $_REQUEST['dob'];
		$dept = $_REQUEST['dept'];
		$gender = $_REQUEST['gender'];
		$class = $_REQUEST['class'];
		$adress = $_REQUEST['adress'];
		
		$photo=$_FILES['photo']['name'];
		$avatar_tmpName=$_FILES['photo']['tmp_name'];
		$location="../upload/";
		move_uploaded_file($avatar_tmpName,$location."$photo");
		
		$s_id= $_REQUEST['s_id'];
		
		
		

		
/*
		$sql2 = "select username from users where username='{$username}'";
		$result = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($result);
		if($row[]){
		}*/
        $conn = getConnection();
	if(!empty($_FILES['photo']['name'])){
		$sql= "UPDATE student SET s_name='$s_name', s_password='$s_password',email='$email',dob='$dob',dept='$dept',
		        gender='$gender',class='$class',adress='$adress',photo='$photo' WHERE s_id='$s_id'";
	}
	else{
		$sql= "UPDATE student SET s_name='$s_name', s_password='$s_password',email='$email',dob='$dob',dept='$dept',
		        gender='$gender',class='$class',adress='$adress' WHERE s_id='$s_id'";
	}
		if(mysqli_query($conn, $sql)){
			header("location:../views/ManipulateUser.php?edited");
		}else{
			echo "Error";
		}
	}
	?>
	