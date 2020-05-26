


<?php	
	session_start();
	if(!isset($_SESSION['p_name'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Note</title>
</head>
<body>
<center>
<table  border="0" width="60%">

        <tr>

	    <td>
		<h1 align="center">Notes!</h1>
	    </td>
	    </tr>

		<tr>
		<td colspan="2" align="center"><a href="notes1.php">Physics</a></td>
		</tr>

		<tr>
		<td colspan="2" align="center"><a href="notes2.php">Chemistry</a></td>
		</tr>
		<tr>
		<td colspan="2" align="center"><a href="notes3.php">Biology</a></td>
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