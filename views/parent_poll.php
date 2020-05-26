
<?php
	session_start();
	//print_r($_SESSION['user']);
	require_once('../service/functions.php');
	//require('db.php');
	$result = getpoll();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Poll</title>
</head>
<body>
	<form action="parent_comments.php" method="post" >
<center>
<table  border="1" width="60%">


       <tr align="center">

	   <td>
		<h1 align="center"> Welcome! </h1>

		<b>Poll:</b><br>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>

                    <?=$row['question']?>

		<?php } ?>

		<br>
		Do you recommanded it?<br>
       	
        <input type="radio" name="comments"  value="yes">Yes
	  <input type="radio" name="comments" value="no">No
		<br>
	

				
		
			
				
				<input type="submit" name="submit"  value="Submit">
					<br>
			         <br>

		<a href="parent_notification.php">Or</a><br>
		<br>
		

	</br>
		<a href="parent_home.php">Go home</a><br>
	
		<a href="logout.php"><b>Logout</b></a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>