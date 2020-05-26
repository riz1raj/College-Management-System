<?php
	session_start();
	
	//print_r($_SESSION['user']);
	require_once('../service/functions.php');
	//require('db.php');
	$result = getschedule();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Exam Schedule</title>
</head>
<body>

		
		<center>
		
		<table border=1>

			<tr>
		<td colspan="4" align="center"><b> Exam Schedule </b></center></td>

		</tr>
			<tr>
				
				
				<td>DATE</td>
				<td>TIME</td>
				<td>Course</td>
				<td>Time</td>
				
			</tr>

	<?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
		<tr>
			
			<td><?=$row['e_date']?></td>
			<td><?=$row['e_time']?></td>
			<td><?=$row['c_name']?></td>
			<td><?=$row['e_duration']?></td>
			
		</tr>

	
	<?php } ?>

	

	</table>

</br>

        	<a href="parent_home.php"> Back</a>  | 
		    <a href="logout.php"> logout</a> 

</center>
</body>
</html>
