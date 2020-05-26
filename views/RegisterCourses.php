

                 <!DOCTYPE html>
				<html>
				<head>
				       <title>Course Info Registration</title>
				</head>
				
				<body>
				<br/>
				<center>
				<img src="Subject Info.jpg" width="200px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="../php/RegisterCoursesCheck.php" method="post" onsubmit="return check()" enctype="multipart/form-data">
				<center>
				
				<fieldset>
				
				<legend><b>Course Info Registration</b></legend>
				
				<table border=0>
				
				
				<tr>
				<td>
				Subject Name <br/>
                      <input type="text" name="name" id="aname">
					  
                </td>					  
				</tr>
				
				
				
				<tr>
				<td>
				Time <br/>
                      <input type="text" name="time" id="ctime">
					
					  
                </td>					  
				</tr>
				
				
			 
				<center>
				<td><input type="submit" name="submit25"  value="Register"></td>
				</center>
				
				
				
			</tr>
			
			<tr>
			<center>
			
			<td><a href='Courses.php'>View Registered Courses</a></td>
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
			var name= document.getElementById('aname').value;
			
			var time=document.getElementById('ctime').value;
			
		    
			
			if(name=="")
		{
			alert("Please Enter Full Course Name");
			return false;
			
		}
		
			else if(name.length<4)
		{
			alert("Course Name Must be greater than 3 characters");
			
			return false;
			
		}
		
		
		
		else if(time=="")
		{
			alert("Password Cannot be Empty!!!");
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
				
				