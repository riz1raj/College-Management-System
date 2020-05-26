<?php
	session_start();
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	
	$result1= getStudentInfo();
	$result2= getTeacherInfo();
	$result3= getParentInfo();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Manipulate User Info</title>
</head>
<body>


            <center>

         <table border=1>
		 
		 <tr>
		      <td colspan=12><center><b>Manipulate Student Details</b></center></td>
		 
		 </tr>
		 
		 <tr>
		     <td><b><center>ID</center></b></td>
			 <td><center><b>Name</b></center></td>
			 <td><center><b>Password</b></center></td>
			 <td><center><b>Email</b></center></td>
			 <td><center><b>Date of Birth</b></center></td>
			 <td><center><b>Department</b></center></td>
			 <td><center><b>Gender</b></center></td>
			 <td><center><b>Class</b></center></td>
			 <td><center><b>Adress</b></center></td>
			 <td><center><b>Profile Picture</b></center></td>
			
			
			  <td><center><b>Action</b></center></td>
		 
		 </tr>
		
		 <?php	while($row = mysqli_fetch_assoc($result1)){ ?>
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
			 <td><img width="60px" src="../upload/<?=$row['photo']?>"></td>
			<td>
				<a href="updatestudent.php?edit_sid=<?=$row['s_id']?>">Edit</a> 
				<a href="deletestudent.php?s_id=<?=$row['s_id']?>" onclick="return confirm('Are you Sure?')">Delete</a> 
			</td>
			
			
			
			 
		 
		 </tr>
		 <?php } ?>
			
			<tr>
			<td colspan=12><center><a href='Home.php'>Go Home</a></center></td>
			
			</tr>
		 </center>
		 
		 
		 
		 <center>
             <br/>
         <table border=1>
		 
		 <tr>
		      <td colspan=12><center><b>Manipulate Teacher Details</b></center></td>
		 
		 </tr>
		 
		 <tr>
		     <td><b><center>ID</center></b></td>
			 <td><center><b>Name</b></center></td>
			 <td><center><b>Password</b></center></td>
			 <td><center><b>Email</b></center></td>
			 <td><center><b>Date of Birth</b></center></td>
			 <td><center><b>Blood Group</b></center></td>
			 <td><center><b>Gender</b></center></td>
			 <td><center><b>Salary</b></center></td>
			 <td><center><b>Department</b></center></td>
			 <td><center><b>Status</b></center></td>
			 <td><center><b>Photo</b></center></td>
			
			
			
			  <td><center><b>Action</b></center></td>
		 
		 </tr>
		
		 <?php	while($row = mysqli_fetch_assoc($result2)){ ?>
		 <tr>
		     <td><?=$row['t_id']?></td>
			 <td><?=$row['t_name']?></td>
			 <td><?=$row['t_password']?></td>
			 <td><?=$row['email']?></td>
			 <td><?=$row['dob']?></td>
			 <td><?=$row['bldgrp']?></td>
			 <td><?=$row['gender']?></td>
			 <td><?=$row['salary']?></td>
			 <td><?=$row['dept']?></td>
			  <td><?=$row['status']?></td>
			 <td><img width="60px" src="../upload/<?=$row['photo']?>"></td>
			<td>
				<a href="updateteacher.php?edit_tid=<?=$row['t_id']?>">Edit</a> 
				<a href="deleteteacher.php?t_id=<?=$row['t_id']?>" onclick="return confirm('Are you Sure?')">Delete</a> 
			</td>
			
			
			
			 
		 
		 </tr>
		 <?php } ?>
			
			<tr>
			<td colspan=12><center><a href='Home.php'>Go Home</a></center></td>
			
			</tr>
		 </center>
		 
		 
		  <center>
             <br/>
         <table border=1>
		 
		 <tr>
		      <td colspan=12><center><b>Manipulate Parent Details</b></center></td>
		 
		 </tr>
		 
		 <tr>
		     <td><b><center>ID</center></b></td>
			 <td><center><b>Name</b></center></td>
			 <td><center><b>Password</b></center></td>
			 <td><center><b>Email</b></center></td>
			 <td><center><b>Date of Birth</b></center></td>
			 <td><center><b>Blood Group</b></center></td>
			 <td><center><b>Gender</b></center></td>
			 <td><center><b>Occupation</b></center></td>
			 <td><center><b>Salary</b></center></td>
			
			 <td><center><b>Photo</b></center></td>
			
			
			
			  <td><center><b>Action</b></center></td>
		 
		 </tr>
		
		 <?php	while($row = mysqli_fetch_assoc($result3)){ ?>
		 <tr>
		     <td><?=$row['p_id']?></td>
			 <td><?=$row['p_name']?></td>
			 <td><?=$row['p_password']?></td>
			 <td><?=$row['email']?></td>
			 <td><?=$row['dob']?></td>
			 <td><?=$row['bldgrp']?></td>
			 <td><?=$row['gender']?></td>
			 <td><?=$row['occupation']?></td>
			 <td><?=$row['salary']?></td>
			 
			 <td><img width="60px" src="../upload/<?=$row['photo']?>"></td>
			<td>
				<a href="updateparent.php?edit_pid=<?=$row['p_id']?>">Edit</a> 
				<a href="deleteparent.php?p_id=<?=$row['p_id']?>" onclick="return confirm('Are you Sure?')">Delete</a> 
			</td>
			
			
			
			 
		 
		 </tr>
		 <?php } ?>
			
			<tr>
			<td colspan=12><center><a href='Home.php'>Go Home</a></center></td>
			
			</tr>
		 </center>
		
		 
</body>
</html>