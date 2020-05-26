<?php
	session_start();
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	$result = getCourseInfo();
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
		      <td colspan=4><center><b>Course Details</b></center></td>
		 
		 </tr>
		 
		 <tr>
		     <td>Class ID</td>
			 <td><center>Subject</center></td>
			 <td><center>Time</center></td>
		 
		 </tr>
		 <?php	while($row = mysqli_fetch_assoc($result)){ ?>
		 <tr>
		     <td><?=$row['c_id']?></td>
			 <td><?=$row['c_name']?></td>
			 <td><?=$row['time']?></td>
		 
		 </tr>
		 <?php } ?>
		
		 
			
			<tr>
			<td colspan=3><center><a href='RegisterCourses.php'>Get Back</a></center></td>
			
			</tr>
		 
		 </table>
		 
		 </center>
		 
</body>
</html>