 <?php
	session_start();
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	
	$result= getStudentInfoUpdate();
	
	
	
?>
 
 
 
 <!DOCTYPE html>
				<html>
				<head>
				       <title>Student Registration</title>
				</head>
				 <?php	while($row = mysqli_fetch_assoc($result)){ ?>
				<body>
				<br/>
				<center>
				<img src="Student.png" width="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="../php/UpdateStudentCheck.php" method="post" enctype="multipart/form-data">
				<center>
				
				<fieldset>
				
				<legend><b>Student Registration</b></legend>
				
				<table border=0>
				
				
				<tr>
				<td>
				Student Name <br/>
                      <input type="text" name="name" value="<?=$row['s_name']?>">
					  
                </td>					  
				</tr>
				
				
				
				<tr>
				<td>
				Password <br/>
                      <input type="password" name="pwd" value="<?=$row['s_password']?>">
					
					  
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
				Class <br/>
                      <input type="number" name="class" value="<?=$row['class']?>">
					    
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Adress <br/>
                      <input type="text" name="adress" value="<?=$row['adress']?>">
					    
					  
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
				
				
			    
				
				  
			 <input type="hidden" name="s_id" value="<?=$row['s_id']?>">
			
			 <br/>
			 <tr>
			 
				
				<td><input type="submit" name="submit50"  value="Update Data" onclick="return confirm('Are you Sure?')"></td>
				
				
				
				
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