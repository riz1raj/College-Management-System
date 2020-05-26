


<?php
   session_start();
   if(!isset($_SESSION['p_name'])){  
		header("location: login.php");
	}
	include('../service/db.php');
	if(isset($_POST['submit'])){

        $photo = $_REQUEST['create_complaint'];
		//$photo=$_FILES['photo']['name'];
		/*$avatar_tmpName=$_FILES['photo']['tmp_name'];
		$location="../upload/";
		move_uploaded_file($avatar_tmpName,$location."$photo");*/

		

        $conn = getConnection();
        $name=$_SESSION['p_name'];
		$sql = "UPDATE parent_createcomplaint SET create_complaint='$photo' WHERE p_name='$name'";
		/*$sql = "insert into createcomplaint where create_complaint='$photo' and p_name='$name'";*/

		if(mysqli_query($conn, $sql)){
			//header('location: createcomplaint.php');
			echo "Upload done!";
		}else{
			echo "Error";
		}
	}

	if(isset($_POST['submit1'])){

		//$photo = $_REQUEST['create_complaint'];

        
		$photo=$_FILES['photo']['name'];
		$avatar_tmpName=$_FILES['photo']['tmp_name'];
		$location="../upload/";
		move_uploaded_file($avatar_tmpName,$location."$photo");

		

        $conn = getConnection();
        $name=$_SESSION['p_name'];
		$sql = "UPDATE parent_createcomplaint SET create_complaint='$photo' WHERE p_name='$name'";
		/*$sql = "insert into createcomplaint where create_complaint='$photo' and p_name='$name'";*/

		if(mysqli_query($conn, $sql)){
			//header('location: createcomplaint.php');
			echo "Upload done!";
		}else{
			echo "Error";
		}
	}

