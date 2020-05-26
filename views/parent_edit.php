<?php
	session_start();
	if(!isset($_SESSION['p_name'])){  
		header("location: login.php");
	}
	//print_r($_SESSION['user']);
    //include "service/db.php";
	require_once('../service/functions.php');
	
	$result = getParents();


	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$bldgrp = $_POST['bldgrp'];
		$photo=$_FILES['photo']['name'];
		$avatar_tmpName=$_FILES['photo']['tmp_name'];
		$location="../upload/";
		move_uploaded_file($avatar_tmpName,$location."$photo");
		///
        /*$photo = $_FILES['mypic']['name'];
		$dest = "upload/".$photo;
		$src = $_FILES['mypic']['tmp_name'];

		if(move_uploaded_file($src, $dest)){
			$_SESSION['pic'] = $photo;
			header('location: parent_details.php');
		}else{
			echo "Error";
		}*/
    

if($_FILES['photo']['name'] == "") {

	      $con = getConnection();
		$sql = "UPDATE parent SET p_password='$password',email='$email',gender='$gender',dob='$dob',bldgrp='$bldgrp' where p_id='$id';";
		if(mysqli_query($con, $sql)){
			//$message = "Update Successfully";
			header("Location: parent_details.php");
			echo "Update Successfully";
		}else{
			echo "Error";
		}

}
    
    else
    {
    	    $con = getConnection();
		$sql = "UPDATE parent SET p_password='$password',email='$email',gender='$gender',dob='$dob',bldgrp='$bldgrp',photo='$photo' where p_id='$id';";
		if(mysqli_query($con, $sql)){
			//$message = "Update Successfully";
			header("Location: parent_details.php");
			echo "Update Successfully";
		}else{
			echo "Error";
		}
    }
		

	
}
			
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
    

		<a href="parent_profile.php"> Back</a> | 
		<a href="logout.php"> logout</a> 
		<br/>
		
		<br><br>
		

	
		
		
	
<form method="POST"   enctype="multipart/form-data">
	<table>


<?php	while($row = mysqli_fetch_assoc($result)){ ?>
	    	<tr>
				<td>Id:</td>
				<td><input type="text" readonly=""name="id" value="<?=$row['p_id']?>" ></td>
			</tr>
		
			<tr>
				<td>Password:</td>
				<td><input type="" name="password" value="<?=$row['p_password']?>"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="" name="email" value="<?=$row['email']?>"></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td><input type="" name="gender" value="<?=$row['gender']?>"></td>
			</tr>
			<tr>
				<td>Date of Birth:</td>
				<td><input type="" name="dob" value="<?=$row['dob']?>"></td>
			</tr>
			<tr>
				<td>Blood group:</td>
				<td><input type="" name="bldgrp" value="<?=$row['bldgrp']?>"></td>
			</tr>
			

			 <tr>
			 	<td>
				     Photo:
				</td>
				<td>
				 <img width="60px" src="../upload/<?=$_SESSION['user1']['photo']?>">
				<td><input type="file" name="photo" ></td>
			     </td>
			 </tr>
			
			
			
				<td></td>
				<td><input type="submit" name="submit" value="Confirm"></td>
			</tr>
			
			
			<?php } ?>
		</table>
	</form>
	
</body>
</html>