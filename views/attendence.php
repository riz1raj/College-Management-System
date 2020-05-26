<?php
	session_start();
	
	//print_r($_SESSION['user']);
	require_once('../service/functions.php');
	//require('db.php');
	$result = getAttendence();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<body>

		<center>
		
		
		<table border=1>


			<tr>
		<td colspan="2" align="center"><b>Attendence Sheet </b></center></td>

		</tr>
			<tr>
				
			
				<td>DATE</td>
				<td>ATTENDENCE</td>
				
				
			</tr>

	<?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
		<tr>
			<td><?=$row['Date']?></td>
			<td><?=$row['Present']?></td>
			
			
		</tr>

	
	<?php } ?>

	

	</table>

</br>

        	<a href="parent_home.php"> Back</a>  | 
		    <a href="logout.php"> logout</a> 

</center>
</body>
</html>

