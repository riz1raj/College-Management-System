<?php
	session_start();
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	$result = getAdmissionInfo();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admission Info</title>
</head>
<body>
<br/>
<br/>
<br/>
<br/>
<br/>
            
			
			
            <center>
			<h2>Admission Schedule for Year 2020</h2>
           <table border=1>
		   <tr><?php	while($row = mysqli_fetch_assoc($result)){ ?>
		      <td><b>Admission Test:</b></td>
		   
		        <td><b><?=$row['ad_test']?></b></td>    
					</tr>
					
					
			<tr> 
			<td><b>Admission Form Collection & Submission (Up to) :</b></td>
		        <td><b><?=$row['ad_form']?></b></td>    
					</tr>	
					
					<tr> <td><b>Total fees per subject:</b></td>
		        <td><b><?=$row['ad_fee']?></b></td>    
					</tr>
					
					<tr> <td><b>Class Start : </b></td>
		        <td><b><?=$row['start']?></b></td>    
					</tr>	
					
					<tr> <td colspan=2><center><a href='PrepeareAdmission.php'>Get Back</a></center></td>
		           
					</tr>
		  <?php } ?>
		           
		   
		   </table>
		 
		 </center>
		 
		 <br/>
		 <br/>
		 
		
		
		
</body>
</html>