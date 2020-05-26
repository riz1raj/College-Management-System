<?php
	session_start();
	//print_r($_SESSION['user']);
	include('../service/db.php');
	
	?>	
 
 
 
 <!DOCTYPE html>
				<html>
				<head>
				       <title>Admin Update</title>
				</head>
				 
				<body>
				<br/>
				<center>
				<img src="../views/new-account-icon-256x256.png" width="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="../php/UpdateAdminCheck.php" method="post" enctype="multipart/form-data">
				<center>
				
				<fieldset>
				
				<legend><b>Admin Update</b></legend>
				
				<table border=0>
				
				
				<tr>
				<td>
				Admin Name <br/>
                      <input type="text" name="name" value="<?= $_SESSION['user']['a_name']?>">
					  
                </td>					  
				</tr>
				
				
				
				<tr>
				<td>
				Password <br/>
                      <input type="password" name="pwd" value="<?= $_SESSION['user']['a_password']?>">
					
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Email <br/>
                      <input type="text" name="email" value="<?= $_SESSION['user']['email']?>">
					    
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Date of Birth <br/>
                      <input type="date" name="dob" value="<?= $_SESSION['user']['dob']?>">
					  
					   
                </td>					  
				</tr>
				
				 
				 <tr>
			 <td>
			    Blood Group <br/>
				</td>
				</tr>
				<tr>
				<td>
				<select name="bloodGrp" id="bldGrp">
							
							<option value="A+"<?php 
                         if($_SESSION['user']['bldgrp']=='A+')
                            {
	                   echo "selected";
                       }
                      ?>>A+</option>
							<option value="A-"<?php 
                         if($_SESSION['user']['bldgrp']=='A-')
                            {
	                   echo "selected";
                       }
                      ?>>A-</option>
							<option value="B+"
							<?php 
                         if($_SESSION['user']['bldgrp']=='B+')
                            {
	                   echo "selected";
                       }
                      ?>>B+</option>
							<option value="B-<?php 
                         if($_SESSION['user']['bldgrp']=='B-')
                            {
	                   echo "selected";
                       }
                      ?>">B-</option>
							<option value="O+"
							<?php 
                         if($_SESSION['user']['bldgrp']=='O+')
                            {
	                   echo "selected";
                       }
                      ?>>O+</option>
							<option value="O-"
							<?php 
                         if($_SESSION['user']['bldgrp']=='O-')
                            {
	                   echo "selected";
                       }
                      ?>>O-</option>
							<option value="AB+"<?php 
                         if($_SESSION['user']['bldgrp']=='AB+')
                            {
	                   echo "selected";
                       }
                      ?>>AB+</option>
							<option value="AB-"<?php 
                         if($_SESSION['user']['bldgrp']=='AB-')
                            {
	                   echo "selected";
                       }
                      ?>>AB-</option>
						</select>
						
					
			 
			 </td>
			 </tr>
				
				
				
				
				<tr>
				<td>Gender</td> 
				</tr>
				<tr>
				<td>Male<input type="radio" name="gender" id="gen1" value="male"
				<?php 
              if($_SESSION['user']['gender']=='male')
                  {
	              echo "checked";
                  }
                 ?>>
				    Female<input type="radio" name="gender" id="gen2" value="female"
					<?php 
              if($_SESSION['user']['gender']=='female')
                  {
	              echo "checked";
                  }
                 ?>>
					Others<input type="radio" name="gender" id="gen3" value="others"
					<?php 
              if($_SESSION['user']['gender']=='others')
                  {
	              echo "checked";
                  }
                 ?>>
					</td>
					
			</tr>
				
				
				
				
				
				<tr>
			    <td>
				     Photo <br/>
				</td>
				</tr>
				
				<tr>
				<td><input type="file" name="photo" id="aphoto"></td>
			 
			 </tr>
				
				
			    
				
				  
			 <input type="hidden" name="a_id" value="<?= $_SESSION['user']['a_id']?>">
			
			 <br/>
			 <tr>
			 
				
				<td><input type="submit" name="submit53"  value="Update Data" onclick="return confirm('Are you Sure?')"></td>
				
				
				
				
			</tr>
			
			<tr>
			<td><a href='ManipulateAdmin.php'>Return</a></td>
			
			</tr>
			
			
			
				
				</table>
				
				</center>
				
				</fieldset>
				
				</form>
				
			</body>
				</html>