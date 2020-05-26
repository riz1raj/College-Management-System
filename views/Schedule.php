<?php
	session_start();
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	$result = getExamSchedule();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Exam Schedule</title>
</head>
<body>
<br/>
<br/>
<br/>
<br/>
<br/>
            
			
			
            <center>
         <table border=1>
		<tr><td colspan=5> <center><b> Mid Term Examination 2020</b></center> </td></tr>
		   <tr>
		   <td>Exam Date</td>
		   <td>Exam Time</td>
		   <td><center>Subject</center></td>
		   <td>Exam Duration</td>
		   
		   </tr>
		   
		   </tr>
		 <?php	while($row = mysqli_fetch_assoc($result)){ ?>
		 <tr>
		     <td><?=$row['e_date']?></td>
			 <td><?=$row['e_time']?></td>
			 <td><?=$row['c_name']?></td>
			 <td><?=$row['e_duration']?></td>
		 
		 </tr>
		 <?php } ?>
		   
		   <tr>
			<td colspan=5><center><a href='MakeSchedule.php'>Get Back</a></center></td>
			
			</tr>
		 
		 </table>
		 
		 </center>
		 
</body>
</html>