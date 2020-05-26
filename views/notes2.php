<?php
	session_start();
	//print_r($_SESSION['user']);
	require_once('../service/functions.php');
	//require('db.php');
	$result = getNote2();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cnotes</title>
</head>
<body>
<center>
<table  border="1" width="60%">

       <tr align="center">
       	

	   <td>
	   	<h1 align="center">Chemical Properties!</h1><br>

	 		<?php	while($row = mysqli_fetch_assoc($result)){ ?>

              Note:<?=$row['note']?>

		    <?php } ?>
      
        <br>
		<a href="note.php">Back</a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>