<?php
	session_start();
	//print_r($_SESSION['user']);
	require_once('../service/functions.php');
	//require('db.php');
	$result = getNote1();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pnotes</title>
</head>
<body>
<center>
<table  border="1" width="60%">

       <tr align="center">
       	

	   <td>
	   	<h1 align="center">Why physics is important!</h1><br>
        	    		<?php	while($row = mysqli_fetch_assoc($result)){ ?>

                    <?=$row['note']?>

		<?php } ?>
	</br>
		
       
        
		<a href="note.php">Back</a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>