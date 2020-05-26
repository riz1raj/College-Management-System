<?php
	session_start();
	if(!isset($_SESSION['p_name'])){  
		header("location: login.php");
	}
	//print_r($_SESSION['user']);
	require_once('../service/functions.php');
	//require('db.php');
	$result = subjectinfo();
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
		<td colspan="6" align="center"><b> Subject Information </b></center></td>

		</tr>
			<tr>
				
		<td align="center"><b>Science</b></td>
		<td align="center"><b>Subject Code</b></td>
		<td align="center"><b>Arts</b></td>
		<td align="center"><b>Subject Code</b></td>
		<td align="center"><b>Commerce</b></td>
		<td align="center"><b>Subject Code</b></td>
				
			</tr>

	<?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
		<tr>
		<td><?=$row['science']?></td>
			<td><?=$row['Ssubject_code']?></td>
			<td><?=$row['arts']?></td>
			<td><?=$row['Asubject_code']?></td>
			<td><?=$row['commerce']?></td>
			<td><?=$row['Csubject_code']?></td>
			
		</tr>

	
	<?php } ?>

	

	</table>

</br>

        	<a href="parent_home.php"> Back</a> | 
		    <a href="logout.php"> logout</a> 

</center>
</body>
</html>
