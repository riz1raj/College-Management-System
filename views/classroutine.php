<?php
	session_start();
	
	//print_r($_SESSION['user']);
	require_once('../service/functions.php');
	//require('db.php');
	$result4 = getCroutine();
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
		<td colspan="3" align="center"><b> Class Routine </b></center></td>

		</tr>
			<tr>
				
				<td>Course Id</td>
				<td>Course Name</td>
				<td>TIME</td>
				
			</tr>

	<?php	while($row = mysqli_fetch_assoc($result4)){ ?>
		
		<tr>
			<td><?=$row['c_id']?></td>
			<td><?=$row['c_name']?></td>
			<td><?=$row['time']?></td>
			
			
		</tr>

	
	<?php } ?>

	

	</table>

</br>

        	<a href="parent_home.php"> Back</a>  | 
		    <a href="logout.php"> logout</a> 
		</center>


</body>
</html>
