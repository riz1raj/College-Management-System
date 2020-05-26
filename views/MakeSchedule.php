

<?php
	session_start();
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	$result = getCourseInfo();
	$result1 = getStudentInfo();
?>

                 <!DOCTYPE html>
				<html>
				<head>
				       <title>Prepeare Exam Schedule</title>
				</head>
				
				<body>
				<br/>
				<center>
				<img src="Schedule.jpg" width="200px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="../php/MakeScheduleCheck.php" method="post" onsubmit="return check()" enctype="multipart/form-data">
				<center>
				
				<fieldset>
				
				<legend><b>Prepeare Exam Schedule</b></legend>
				
				<table border=0>
				
				
				
				
				
				
				<tr>
				<td>
				Exam Date <br/>
                     <input type="date" name="edate" id="e_date">
					
					  
                </td>					  
				</tr>
				
				
				<tr>
			 <td>
			   Exam Time <br/>
				</td>
				</tr>
				<tr>
				<td>
				<select name="etime" id="e_time">
							<option value="">Select Exam Time</option>
							<option value="morning">Morning</option>
							<option value="afternoon">Afternoon</option>
							
						</select>
						
						
			 
			 </td>
			 </tr>
			 
			 
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
				Exam Duration <br/>
                     <input type="text" name="eduration" id="e_duration">
					
					  
                </td>					  
				</tr>
				
				
			 
				<center>
				<td><input type="submit" name="submit29"  value="Prepeare"></td>
				</center>
				
				
				
			</tr>
			
			<tr>
			<center>
			
			<td><a href='Schedule.php'>View Prepeared Schedule</a></td>
			</center>
			</tr>
			
			<tr>
			 <td>
			 <center>
			 <td><a href='Home.php'>Go Home</a></td>
			 </center>
			 </td>
			
			</tr>
			
			
			
				
				</table>
				
				</center>
				
				</fieldset>
				
				</form>
				
			</body>
				
				
				
				
				
				 <script>
 
          function check(){
			var date= document.getElementById('e_date').value;
			var time= document.getElementById('e_time').value;
			var name= document.getElementById('coname').value;
			var duration=document.getElementById('e_duration').value;
			
		    
			if(date=="")
		{
			alert("Please Fill Exam Date");
			return false;
			
		}
		
		else if(time=="")
		{
			alert("Please Select Time");
			return false;
			
		}
			
			
		else if(name=="")
		{
			alert("Please Select Course Name");
			return false;
			
		}
		
			
		
		
		
		else if(duration=="")
		{
			alert("Please Enter Duration of the Exam");
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
				
				