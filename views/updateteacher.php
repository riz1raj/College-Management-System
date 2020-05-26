 <?php
	session_start();
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	
	$result1= getTeacherInfoUpdate();
	
	
	
?>
 
 
 
 
                <!DOCTYPE html>
				<html>
				<head>
				       <title>Teacher Update</title>
				</head>
				<?php	while($row = mysqli_fetch_assoc($result1)){ ?>
				
				<body>
				<br/>
				<center>
				<img src="teacher.png" width="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="../php/UpdateTeacherCheck.php" method="post" enctype="multipart/form-data">
				<center>
				
				<fieldset>
				
				<legend><b>Teacher Update</b></legend>
				
				<table border=0>
				
				
				<tr>
				<td>
				Teacher Name <br/>
                      <input type="text" name="name" value="<?=$row['t_name']?>">
					   
                </td>					  
				</tr>
				
				
				
				<tr>
				<td>
				Password <br/>
                      <input type="password" name="pwd" value="<?=$row['t_password']?>">
					  
					  
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
				Salary <br/>
                      <input type="number" name="salary" value="<?=$row['salary']?>">
					    
					  
                </td>					  
				</tr>
				
				<tr>
			 <td>
			    Department <br/>
				</td>
				</tr>
				<tr>
				<td>
				<select name="dept">
							
							<option value="cse"
							<?php 
                 if($row["dept"]=='cse')
                   {
	                   echo "selected";
                    }
                      ?>>cse</option>
							<option value="eee"<?php 
                 if($row["dept"]=='eee')
                   {
	                   echo "selected";
                    }
                      ?>>eee</option>
							<option value="bba" <?php 
                 if($row["dept"]=='bba')
                   {
	                   echo "selected";
                    }
                      ?>>bba</option>
							
						</select>
						
						 
			 
			 </td>
			 </tr>
			 
			 
				
				<tr>
			    <td>
			    Married Status <br/>
				Married<input type="radio" name="tmarry" id="mar1" value="Married" <?php 
              if($row["status"]=='Married')
                  {
	              echo "checked";
                  }
                 ?>>
				Not Married<input type="radio" name="tmarry" id="mar2" value="Not Married"
				<?php 
              if($row["status"]=='Not Married')
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
			<input type="hidden" name="t_id" value="<?=$row['t_id']?>">
			 <br/>
			 
			 <tr>
			 
				
				<td><input type="submit" name="submit51"  value="Update" onclick="return confirm('Are you Sure?')"></td>
				
				
				
				
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