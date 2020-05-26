<?php
	session_start();
	if(!isset($_SESSION['p_name'])){  
		header("location: login.php");
	}
	//print_r($_SESSION['user']);
	require_once('../service/functions.php');
	//require('db.php');
	$result = getFinancialinfo();
?>






<!DOCTYPE html>
<html>
<head>
	<title>Financial Information</title>
</head>
<body>

		
		<center>
		
		<table border=1>

			<tr>
		<td colspan="4" align="center"><b> Financial Information </b></center></td>

		</tr>
			<tr>
				
				
				<td>Admission Date</td>
				<td>Admission Form</td>
				<td>Admission Fee</td>
				<td>Admission Start</td>
				
			</tr>

	<?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
		<tr>
			
			<td><?=$row['ad_test']?></td>
			<td><?=$row['ad_form']?></td>
			<td><?=$row['ad_fee']?></td>
			<td><?=$row['start']?></td>
			
		</tr>

	
	<?php } ?>

	

	</table>

</br>

        	<a href="parent_home.php"> Back</a>  | 
		    <a href="logout.php"> logout</a> 

</center>
</body>
</html>
