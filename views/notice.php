


<?php	
	session_start();
	if(!isset($_SESSION['p_name'])){  
		header("location: login.php");
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notice</title>
</head>
<body>
<center>
<table  border="0" width="60%">

        <tr>

	    <td>
		<h1 align="center">Notices!</h1>
	    </td>
	    </tr>

		<tr>
		<td colspan="2" align="center"><a href="notice1.php">make-up class</a></td>
		</tr>
			<tr>
		<td colspan="2" align="center"><a href="notice2.php">Lab exam notice</a></td>
		</tr>

		<tr>
		<td colspan="2" align="center"><a href="notice3.php">Class Cancellation</a></td>
		</tr>
	
		<tr>
		<td align="center">
		<a href="parent_home.php">Go home</a><br>
		<a href="logout.php"><b>Logout</b></a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>