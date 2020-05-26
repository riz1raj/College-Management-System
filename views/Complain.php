<?php
	session_start();
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	
	$result= getComplainInfo();
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Complains</title>
</head>
<body>
<br/>
<br/>
<br/>
<br/>
<br/>
            
			
			
            <center>
           <table border=1>
		   
		   <tr><td colspan=4><center><b>User Complains</b></center></td></tr>
		   
		    <tr><td> Complain ID</td>
			    <td> <center>Class </center></td>
				<td> Complains </td>
				<td> <center>Complain Details</center> </td>
				</tr>
				<?php	while($row = mysqli_fetch_assoc($result)){ ?>
				<td><?=$row['cm_id']?></td>
			    <td><?=$row['class']?></td>
			    <td><?=$row['complaint']?></td>
			     <td><?=$row['p_message']?></td>
				</tr>
				<?php } ?>
				
				<tr>
				<td colspan=4><center><a href='Home.php'>Go Home</a></center></td>
		         </tr>  
		   
		   </table>
		 
		 </center>
		 
		 <br/>
		 <br/>
		 
		
		
		
</body>
</html>