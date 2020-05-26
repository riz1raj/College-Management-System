<?php
	session_start();
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	$result = getCourseInfo();
	$result1 = getStudentInfo1();
?>


                     <!DOCTYPE html>
				<html>
				<head>
				       <title>Register Student Course</title>
				</head>
				
				<body>
				<br/>
				<center>
				<img src="subject.jpg" width="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="../php/SelectCourseCheck.php" method="post" onsubmit="return check()" enctype="multipart/form-data">
				<center>
				
				<fieldset>
				
				<legend><b>Register Student Courses</b></legend>
				
				<table border=0>
				
				<tr>
				<td>
				 Course Name <br/>
				</td>
				</tr>
				<tr>
				<td>
				<select name="cname" id="coname">
							<option value="">Select Course Name</option>
							<?php	while($row = mysqli_fetch_assoc($result)){ ?>
		 
		                   <option><?=$row['c_name']?></option>
			 
		 
		
		 <?php } ?>
							
						</select>
						
						
			 
			 </td>
			 </tr>
				
				
				<tr>
				<td>
				 Student Name <br/>
				</td>
				</tr>
				<tr>
				<td>
				<select name="sname" id="stname">
							<option value="">Student Name</option>
							<?php	while($row = mysqli_fetch_assoc($result1)){ ?>
		 
		                   <option><?=$row['student_name']?></option>
			 
		 
		
		 <?php } ?>
							
						</select>
						
						
			 
			 </td>
			 </tr>
			 
				
				<td><input type="submit" name="submit26"  value="Register Course"></td>
				
				
				
				
			</tr>
			
			<tr>
			<td><a href='Home.php'>Go Home</a></td>
			
			</tr>
			
			
			
				
				</table>
				
				</center>
				
				</fieldset>
				
				</form>
				
			</body>
				
				
				
				
				
				 <script>
 
          function check(){
			var cname= document.getElementById('coname').value;
			
			var sname=document.getElementById('stname').value;
		
		    
			
			if(cname=="")
		{
			alert("Select Course Name");
			return false;
			
		}
		
			
		
		
		
		else if(sname=="")
		{
			alert("Select Student Name");
			return false;
			
		}
		
	
		
		else{
			
			return true;
		}
		
		
		}
        	
		
	
		 </script>
		 
		 <script type="text/javascript">
		         function ajax(){
					  var name= document.getElementById('name').value;
			          
			          var pass=document.getElementById('pass').value;
			          var email=document.getElementById('email').value;
			          var dob=document.getElementById('dob').value;
			          var bld=document.getElementById('bldGrp').value;
			          var salary=document.getElementById('salary').value;
			          var photo=document.getElementById('photo').value;
					  
					  if(document.getElementById('gen1').checked){
						  var gender=document.getElementById('gen1').value;
					  }
					  else if(document.getElementById('gen2').checked){
						  var gender=document.getElementById('gen2').value;
					  }
					  else{
						  var gender=document.getElementById('gen3').value;
					  }
					  var url="RegistrationCheck.php";
					  
					  var vars="Name: "+name+" Password:"+pass+" Email:"+email+" Date of Birth:"+dob+" Blood Group:"+bld+" Gender:"+gender+" Salary="+salary" Profile Picture:"+photo;
					  hr.open("POST",url,true);
					  hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					  hr.onreadystatechange = function() {
	                  if(hr.readyState == 4 && hr.status == 200) {
		            var return_data = hr.responseText;
			        document.getElementById("status").innerHTML = return_data;
	    }
    }
   
                hr.send(vars); 
                document.getElementById("status").innerHTML = "processing...";
					 
				 }
				 
				  </script>
					
				
				</html>
               
				