<?php
	session_start();
	if(!isset($_SESSION['p_name'])){  
		header("location: login.php");
	}
	//print_r($_SESSION['user']);
	require_once('../service/functions.php');
	//require('db.php');
	$result = getComplaint();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Complint Page</title>
</head>
<body>
<center>
<table  border="1" >

       <tr align="center">

	   <td>
		<h1 align="center"> Welcome! </h1>

		<b>From:</b> GOVT. SCIENCE COLLEGE Disciplinary Committe
		<br>
		<b>Subject:</b> Decision by the Disciplinary Committe
		<br>
		Caught writting from paper
		<br>
		<b>panishment:</b><br>

		<?php	while($row = mysqli_fetch_assoc($result)){ ?>

                    <?=$row['complaint']?>

		<?php } ?>

	</br>
		<a href="parent_home.php">Go home</a><br>
	
		<a href="logout.php"><b>Logout</b></a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>