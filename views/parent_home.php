<?php	
	session_start();
	if(!isset($_SESSION['p_name'])){  
		header("location: login.php");
	}
	/*if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}*/
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
</head>
    <body>
    	<center>
	<!--<form action="registration.php" method="post">-->
	<fieldset>
		<legend><h4>Home Page</h4></legend>
	<table border="1" width="30%">
		<tr>
			<td align="center"><a href="parent_profile.php">My Profile</a> </td>
			
		</tr>

		<tr>
			<td align="center"><a href="student_details.php">Student Information</a> </td>
			
		</tr>
		<tr>
			<td align="center"><a href="result.php">Result</a></td>
			
		</tr>


		<tr>
			<td align="center"><a href="classroutine.php">Class Routine</td>
		</tr>

		<tr>
			<td align="center"><a href="attendence.php">Attendence</a></td>
			
		</tr>
		<tr>
			<td align="center"><a href="examschedule.php">Exam Schedule</td>
		</tr>
		<tr>
			<td align="center"><a href="payment.php">Payment</td>
			
		</tr>
		<tr>
			<td align="center"><a href="financialinfo.php">Financial Info</td>
			
		</tr>
		
		<tr>
			<td align="center"><a href="complaint.php">Complaint</td>
		</tr>

		<tr>
			<td align="center"><a href="notice.php">Notices</td>
		</tr>

		<tr>
			<td align="center"><a href="note.php">Notes</td>
		</tr>
		
		
		<tr>
			<td align="center"><a href="parent_createcomplaint.php">Create Complaint</td>
		</tr>

		<tr>
			<td align="center"><a href="subjectinfo.php">subject Information</td>
		</tr>
	
		<tr>
			<td align="center"><a href="parent_poll.php">Poll</td>
		</tr>
		<tr>
			<td align="right">
			    <a href="logout.php"><b>Logout</b></a>
			</td>
		</tr>
	</table>
	</fieldset>
</center>
	</form>
