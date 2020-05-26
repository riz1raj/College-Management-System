<?php
	session_start();
	
	//print_r($_SESSION['user']);
	
?>



<!DOCTYPE html>
<html>
<head>
	<title>Profiles</title>
</head>
<body> 
	<center>
		
		<a href="logout.php"> logout</a> 
		<br>
 <!--
		Name: <?=$_SESSION['user1']['username']?> <br>
		Type: <?=$_SESSION['user1']['type']?> <br>
		Email: <?=$_SESSION['user']['email']?><br>
		-->

	    Name: <?=$_SESSION['user1']['p_name']?> <br/>
		Gender: <?=$_SESSION['user1']['gender']?> <br/>
		Email: <?=$_SESSION['user1']['email']?> <br/>
		Date of Birth: <?=$_SESSION['user1']['dob']?><br/>
		Blood Group: <?=$_SESSION['user1']['bldgrp']?><br/>
		Profile Picture: <img width="60px" src="../upload/<?=$_SESSION['user1']['photo']?>">
	</br>
        Type: <?=$_SESSION['user1']['type']?><br/>

		<a href="parent_edit.php?id=<?=$_SESSION['user1']['p_id']?>">edit</a> |

		<a href="parent_delete.php?id=<?=$_SESSION['user1']['p_id']?>">delete</a>
	</br>
	<a href="parent_home.php"> Back</a> 
	</center>
</body>
</html>
<!--
