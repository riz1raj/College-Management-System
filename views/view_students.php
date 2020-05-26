<?php
	session_start();
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	$result = getAllStudents();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profiles</title>
</head>
<body>

		<a href="parent_home.php"> Back</a>  | 
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
				<td>Student ID</td>
				<td>Student NAME</td>
				<td>Email</td>
				<td>Password</td>
				<td>Dob</td>
				<td>Department</td>
				<td>Gender</td>
				<td>Class</td>
				<td>Address</td>
				
			</tr>
	

	<?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
		<tr>
			<td><?=$row['s_id']?></td>
			<td><?=$row['s_name']?></td>
			<td><?=$row['s_password']?></td>
			<td><?=$row['email']?></td>
			<td><?=$row['dob']?></td>
			<td><?=$row['dept']?></td>
			<td><?=$row['gender']?></td>
			<td><?=$row['class']?></td>
			<td><?=$row['adress']?></td>
			
		</tr>
	<?php } ?>

	</table>
</body>
</html>