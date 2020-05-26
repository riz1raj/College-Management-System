<?php
	session_start();
	
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	$result = getResult();
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
		<td colspan="2" align="center"><b>Result </b></center></td>

		</tr>
			<tr>
				
				<td>SUBJECT</td>
				<td>GRADE</td>
				
			</tr>

	<?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
		<tr>
			<td><?=$row['Subject']?></td>
			<td><?=$row['Grade']?></td>
			
		</tr>
	<?php } ?>

	</table>
</br>
<a href="parent_home.php"> Back</a>  | 
		<a href="logout.php"> logout</a> 
	</center>

</body>
</html>