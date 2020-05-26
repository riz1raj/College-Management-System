<?php
	session_start();
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	
	$result3= getUserInfo();
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
</head>
<body>
<br/>
<br/>
<br/>
<br/>
<br/>
            <center>

         <table border=1>
		 
		 <tr>
		      <td colspan=12><center><b>User Details</b></center></td>
		 
		 </tr>
		 
		 <tr>
		     <td><b><center>ID</center></b></td>
			 <td><center><b>Name</b></center></td>
			 <td><center><b>Password</b></center></td>
			 <td><center><b>Email</b></center></td>
			 <td><center><b>Date of Birth</b></center></td>
			 <td><center><b>Gender</b></center></td>
			 <td><center><b>Blood Group</b></center></td>
			 <td><center><b>Salary</b></center></td>
			 <td><center><b>Class</b></center></td>
			 <td><center><b>Department</b></center></td>
			 <td><center><b>Profile Picture</b></center></td>
			 <td><b>User Type</b></td>
		
		 
		 </tr>
		
		 <?php	while($row = mysqli_fetch_assoc($result3)){ ?>
		 <tr>
		     <td><?=$row['s_id']?></td>
			 <td><?=$row['s_name']?></td>
			 <td><?=$row['s_password']?></td>
			 <td><?=$row['email']?></td>
			 <td><?=$row['dob']?></td>
			 <td><?=$row['gender']?></td>
			 <td><?=$row['bldgrp']?></td>
			 <td><?=$row['salary']?></td>
			 <td><?=$row['class']?></td>
			 <td><?=$row['dept']?></td>
			  <td><img width="60px" src="../upload/<?=$row['photo']?>"></td>
			 <td><?=$row['type']?></td>
			
			
		 
		 </tr>
		 <?php } ?>
		 
			
			<tr>
			
			<td colspan=12><center><a href='Home.php'>Go Home</a></center></td>
			
			</tr>
			
		
		 </table>
</body>


</html>


