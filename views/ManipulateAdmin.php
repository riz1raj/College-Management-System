<?php
	session_start();
	session_regenerate_id(true);
	//print_r($_SESSION['user']);
	include('../service/db.php');
	
	?>	
	


<!DOCTYPE html>
<html>
<head>
	<title>Manipulate Admin Infos</title>
</head>
<body>
<br/>
<br/>
<br/>
<br/>
<br/>
            <center>

         <table border=1>
		 
		 <tr>
		      <td colspan=9><center><b>Manipulate Admin Infos</b></center></td>
		 
		 </tr>
		 
		 <tr>
		     <td>ID</td>
			 <td>Name</td>
			 <td>Password</td>
			 <td>Email</td>
			 <td>Date of Birth</td>
			 <td>Blood Group</td>
			 <td>Gender</td>
			 <td>Photo</td>
			 <td>Action</td>
			
			 
		 
		 </tr>
		 
		 <tr>
		     <td><?= $_SESSION['user']['a_id']?></td>
			 <td><?= $_SESSION['user']['a_name']?></td>
			 <td><?= $_SESSION['user']['a_password']?></td>
			 <td><?= $_SESSION['user']['email']?></td>
			 <td><?= $_SESSION['user']['dob']?></td>
			 <td><?= $_SESSION['user']['bldgrp']?></td>
			 <td><?= $_SESSION['user']['gender']?></td>
			<td><img width="60px" src="../upload/<?=$_SESSION['user']['photo']?>"></td>
			
			 <td>
				<a href="updateadmin.php?edit_aid=<?=$_SESSION['user']['a_id']?>">Edit</a> 
				
			</td>
		 
		 </tr>
		
			
			
			
			
			<tr>
			<td colspan=9><center><a href='Home.php'>Go Home</a></center></td>
			               
			
			</tr>
		 
		 </table>
		 
		 </center>
		 
</body>
</html>