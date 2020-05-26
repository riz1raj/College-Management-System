<?php
	session_start();
	if(!isset($_SESSION['p_name'])){  
		header("location: login.php");
	}
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	$result = getParent();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Parent Profiles</title>
</head>
<body>
	<center>

		<a href="parent_home.php">Go home</a> | 
		<a href="logout.php"> logout</a> 
		<br/>
		<?php
		
		     if(isset($_REQUEST["deleted"])){
				 echo "Data has been deleted";
			 }
		?>
		<br/>
		
		<table border=1>
			<tr>
				
				<td>Parent Id</td>
				<td>Parent Name</td>
				<td>Password</td>
				<td>Email</td>
				<td>Gender</td>
				<td>Date of Birth</td>
				<td>Blood group</td>
				<td>Photo</td>
				
			</tr>

	<?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
		<tr>
			<td><?=$row['p_id']?></td>
			<td><?=$row['p_name']?></td>
			<td><?=$row['p_password']?></td>
			<td><?=$row['email']?></td>
			<td><?=$row['gender']?></td>
			<td><?=$row['dob']?></td>
			<td><?=$row['bldgrp']?></td>
			<!--<td><img src="upload/<?=$_SESSION['pic']['photo']?>"></td>-->
			<td><?=$row['photo']?></td>
		</tr>
	<?php } ?>

	</table>
</center>
</body>
</html>

