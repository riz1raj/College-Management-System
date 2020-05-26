<?php
	session_start();
	if(!isset($_SESSION['p_name'])){  
		header("location: login.php");
	}
	//print_r($_SESSION['user']);
	require_once('../service/functions.php');
	//require('db.php');
	$result = getParentCreateComplaint();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Create Complint Page</title>
</head>
<body>
<center>
<table  border="1" >

       <tr align="center">

	   <td>
		<h1 align="center"> Welcome! </h1>

		<b>From:</b> parent
		<br>
		<b>Subject:</b> complaint for my child
		<br>
      <!--	<?php	while($row = mysqli_fetch_assoc($result)){ ?>

                  <?=$row['create_complaint']?> 
                 <p><iframe src="../upload/<?=$row['create_complaint']?>" frameborder="0" height="400"
      width="95%"></iframe></p>

		<?php } ?>


		<br>
			-->
			<a href="uploadedfile.php">or</a><br>

		
		</td>
		</tr>
	
		
	   <a href="parent_home.php">Go home</a><br>
		<a href="logout.php"><b>Logout</b></a>
	</center>
</body>
</html>