 <?php
	session_start();
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	
	$result= getParentInfoUpdate();
	
	
	
?>
 
 
 
 
                <!DOCTYPE html>
				<html>
				<head>
				       <title>Parent Update</title>
				</head>
				<?php	while($row = mysqli_fetch_assoc($result)){ ?>
				
				<body>
				<br/>
				<center>
				<img src="parents.jpg" width="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="../php/UpdateParentCheck.php" method="post" enctype="multipart/form-data">
				<center>
				
				<fieldset>
				
				<legend><b>Parent Update</b></legend>
				
				<table border=0>
				
				
				<tr>
				<td>
				Parent Name <br/>
                      <input type="text" name="name" value="<?=$row['p_name']?>">
					   
                </td>					  
				</tr>
				
				
				
				<tr>
				<td>
				Password <br/>
                      <input type="password" name="pwd" value="<?=$row['p_password']?>">
					  
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Email <br/>
                      <input type="text" name="email" value="<?=$row['email']?>">
					 
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Date of Birth <br/>
                     <input type="date" name="dob" value="<?=$row['dob']?>">
					
					   
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
							<option value="">Select Blood Group</option>
							<option value="A+"<?php 
                         if($row["bldgrp"]=='A+')
                            {
	                   echo "selected";
                       }
                      ?>>A+</option>
							<option value="A-"<?php 
                         if($row["bldgrp"]=='A-')
                            {
	                   echo "selected";
                       }
                      ?>>A-</option>
							<option value="B+"
							<?php 
                         if($row["bldgrp"]=='B+')
                            {
	                   echo "selected";
                       }
                      ?>>B+</option>
							<option value="B-<?php 
                         if($row["bldgrp"]=='B-')
                            {
	                   echo "selected";
                       }
                      ?>">B-</option>
							<option value="O+"
							<?php 
                         if($row["bldgrp"]=='O+')
                            {
	                   echo "selected";
                       }
                      ?>>O+</option>
							<option value="O-"
							<?php 
                         if($row["bldgrp"]=='O-')
                            {
	                   echo "selected";
                       }
                      ?>>O-</option>
							<option value="AB+"<?php 
                         if($row["bldgrp"]=='AB+')
                            {
	                   echo "selected";
                       }
                      ?>>AB+</option>
							<option value="AB-"<?php 
                         if($row["bldgrp"]=='AB-')
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
              if($row["gender"]=='male')
                  {
	              echo "checked";
                  }
                 ?>>
				    Female<input type="radio" name="gender" id="gen2" value="female"
					<?php 
              if($row["gender"]=='female')
                  {
	              echo "checked";
                  }
                 ?>>
					Others<input type="radio" name="gender" id="gen3" value="others"
					<?php 
              if($row["gender"]=='others')
                  {
	              echo "checked";
                  }
                 ?>>
					</td>
					
			</tr>
			
			<tr>
			 <td>
			    Occupation <br/>
				</td>
				</tr>
				<tr>
				<td>
				<select name="occup" id="poccup">
							
							<option value="Medical Doctor"
							<?php 
                         if($row["occupation"]=='Medical Doctor')
                            {
	                   echo "selected";
                       }
                      ?>>Medical Doctor</option>
					        <option value="Business"<?php 
                         if($row["occupation"]=='Business')
                            {
	                   echo "selected";
                       }
                      ?>>Business</option>
					        <option value="Engineer"<?php 
                         if($row["occupation"]=='Engineer')
                            {
	                   echo "selected";
                       }
                      ?>>Engineer</option>
					        <option value="Others"<?php 
                         if($row["occupation"]=='Others')
                            {
	                   echo "selected";
                       }
                      ?>>Others</option>
							
						</select>
						
						
			 
			 </td>
			 </tr>
				
				<tr>
				<td>
				Salary <br/>
                      <input type="number" name="salary" value="<?=$row['salary']?>">
					    
					  
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
			<input type="hidden" name="p_id" value="<?=$row['p_id']?>">
			 <br/>
			 
			 <tr>
			 
				
				<td><input type="submit" name="submit52"  value="Update" onclick="return confirm('Are you Sure?')"></td>
				
				
				
				
			</tr>
			
			<tr>
			<td><a href='ManipulateUser.php'>Return</a></td>
			
			</tr>
			
			
			
				
				</table>
				
				</center>
				
				</fieldset>
				
				</form>
				<?php } ?>
			</body>
			</html>