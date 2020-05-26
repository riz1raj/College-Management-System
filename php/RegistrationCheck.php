<?php

    session_start();
	include('../service/db.php');
	
	if(isset($_POST['submit'])){
		$a_name = trim($_REQUEST['name']);
		$a_password = trim($_REQUEST['pwd']);
		$email = trim($_REQUEST['email']);
		$dob = $_REQUEST['dob'];
		$bldgrp = $_REQUEST['bloodGrp'];
		$gender = $_REQUEST['gender'];
		$salary = $_REQUEST['salary'];
		$type="admin";
		
		
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
		$sql = "insert into admin VALUES('','{$a_name}','{$a_password}','{$email}','{$dob}','{$bldgrp}','{$gender}','{$salary}', '{$photo}', '{$type}')";
		if(mysqli_query($conn, $sql)){
			echo "Admin Registration done!";
			echo "<br>";
		}else{
			echo "Error";
			echo "<br>";
		}
	}
	?>
	
	<?php

	$name = $_POST['name'];
	$pass = $_POST['pwd'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$bldgrp = $_POST['bloodGrp'];
	$gender = $_POST['gender'];
	$salary = $_POST['salary'];
	
	
	sleep(5);
	echo "Registered Name: ".$name; 
	echo "<br>";
	echo "Registered Password: ".$pass; 
	echo "<br>";
	echo "Registered Email: ".$email;  
	echo "<br>";
	echo "Registered DOB: ".$dob; 
	echo "<br>";
	echo "Registered Blood Group: ".$bldgrp; 
	echo "<br>";
	echo "Gender: ".$gender;
	echo "<br>";
	echo "Amount of salary: ".$salary; 
	
?>