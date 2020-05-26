<?php
	session_start();
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	$result = getAllParents();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profiles</title>
</head>
<body>

		<a href="parent_home.php"> Back</a> | 
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
				<td>ID</td>
				<td>PARENT NAME</td>
				<td>EMAIL</td>
				<td>GENDER</td>
				<td>DATE OF BIRTH</td>
				<td>BLOOD GROUP</td>
                <td>PHOTO</td>
			</tr>


		

	<?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
		<tr>
			<td><?=$row['p_id']?></td>
			<td><?=$row['p_name']?></td>
			<td><?=$row['email']?></td>
			<td><?=$row['gender']?></td>
			<td><?=$row['dob']?></td>
			<td><?=$row['bldgrp']?></td>
			<td><?=$row['photo']?></td>
		</tr>
	<?php } ?>

	</table>
</body>
</html>