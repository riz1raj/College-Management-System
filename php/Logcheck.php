<?php
	
	session_start();

	include('../service/functions.php');
	//include_once('db.php');
	//require('db.php');
	//require_once('db.php');

	if(isset($_POST['submit1'])){

		$a_name = $_POST['name'];
		$a_password = $_POST['password'];
		$username = $_POST['name'];
		$password = $_POST['password'];
		$s_name = $_POST['name'];
		$s_password = $_POST['password'];
			
		$user = validate($a_name, $a_password); //validation for admin
		$user1 = validate1($username, $password); //validation for parent
		$user2 = validate2($s_name, $s_password); //validation for student
		
		
		
		//admin login
		if(count($user) > 0 ){
			$_SESSION['user'] = $user;
			//echo "test";
			header("location: ../views/Home.php");
		}else{
			echo "Please Enter Your Admin Login Details Again";
		}
		
		
		
		//parent login
		if(count($user1) > 0 ){
			$_SESSION['user1'] = $user1;
			//echo "test";
			header("location: ../views/parent_home.php");
		}else{
			echo "Please Enter Your Parent Login Details Again";
		}
	
        
		
		//student login
		if(count($user2) > 0 ){
			$_SESSION['user2'] = $user2;
			//echo "test";
			header("location: ../views/student.php");
		}else{
			echo "Please Enter Your Student Login Details Again";
		}
	}
		

?>