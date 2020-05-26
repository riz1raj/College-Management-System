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
	<title>Poll page</title>
</head>
<body>
<center>
<table  border="1" >

       <tr align="center">

	   <td>
		<h1 align="center"> Welcome! </h1>

		<b>Poll:</b><br>

		

		<?php	while($row = mysqli_fetch_assoc($result)){ ?>

                  
              <?php echo($row['p_message'])?> <br>
                <a href="<?php echo($row['poll'])?>"><?php echo($row['poll'])?></a>

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