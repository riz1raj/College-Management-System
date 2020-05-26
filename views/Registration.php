
                <!DOCTYPE html>
				<html>
				<head>
				       <title>Admin Registration</title>
				</head>
				
				<body>
				<br/>
				<center>
				<img src="../views/new-account-icon-256x256.png" width="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="../php/RegistrationCheck.php" method="post" onsubmit="return check()" enctype="multipart/form-data">
				<center>
				
				<fieldset>
				
				<legend><b>Admin Registration</b></legend>
				
				<table border=0>
				
				
				<tr>
				<td>
				Name <br/>
                      <input type="text" name="name" id="aname">
					 
                </td>					  
				</tr>
				
				
				
				<tr>
				<td>
				Password <br/>
                      <input type="password" name="pwd" id="apass">
					 
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Email <br/>
                      <input type="text" name="email" id="aemail">
					  
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Date of Birth <br/>
                      <input type="date" name="dob" id="adob">
					 
					   
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
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
						</select>
						
						
			 
			 </td>
			 </tr>
				
				
				
				
				<tr>
				<td>Gender</td> 
				</tr>
				<tr>
				<td>Male<input type="radio" name="gender" id="gen1" value="male">
				    Female<input type="radio" name="gender" id="gen2" value="female">
					Others<input type="radio" name="gender" id="gen3" value="others">
					</td>
				
			</tr>
				
				<tr>
				<td>
				Salary <br/>
                      <input type="number" name="salary" id="asalary">
				
					  
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
			
			 <br/>
			 <tr>
			 
				
				<td><input type="submit" name="submit"  value="Submit" onclick="ajax()"></td>
				
				<td><input type="reset" name="" value="Reset"></td>
				
				
			</tr>
			
			<tr>
			<td><a href='../index.php'>Sign in</a></td>
			
			</tr>
			
			
			
				
				</table>
				
				</center>
				
				</fieldset>
				
				</form>
				
			</body>
				
				
				
				
				
				 <script>
 
          function check(){
			var name= document.getElementById('aname').value;
			
			var pass=document.getElementById('apass').value;
			var email=document.getElementById('aemail').value;
			var dob=document.getElementById('adob').value;
			var bld=document.getElementById('bldGrp').value;
			var salary=document.getElementById('asalary').value;
			var photo=document.getElementById('aphoto').value;
		    
			
			if(name=="")
		{
			alert("Please Enter Your Name");
			return false;
			
		}
		
			else if(name.length<4)
		{
			alert("Name Must be greater than 3 characters");
			
			return false;
			
		}
		
		
		
		else if(pass=="")
		{
			alert("Password Cannot be Empty!!!");
			return false;
			
		}
		else if(pass.length<5)
		{
			alert("Password Must Be Greater Than 4 Characters");
			return false;
			
		}
		
		else if(dob=="")
		{
			alert("DOB is not given!!!");
			return false;
			
		}
		
		else if(bld=="")
		{
			alert("Blood Group is not given!!!");
			return false;
			
		}
		
		else if(!document.getElementById('gen1').checked && !document.getElementById('gen2').checked && !document.getElementById('gen3').checked)
		{
			 
			alert("Please Select Gender");
			return false;
		}	 
		
		
		
		else if(salary=="")
		{
			alert("Please enter the amount of salary");
			return false;
			
		}
	
		
		else if(photo=="")
		{
			alert("Please Select photo from your directory");
			return false;
			
		}
		else{
			return true;
		}
	
		
		
		
		
		}
        	
		
	
		 </script>
		 
		 <script type="text/javascript">
		         function ajax(){
					var name= document.getElementById('aname').value;
			
			        var pass=document.getElementById('apass').value;
			       var email=document.getElementById('aemail').value;
			       var dob=document.getElementById('adob').value;
			       var bld=document.getElementById('bldGrp').value;
			      var salary=document.getElementById('asalary').value;
			      var photo=document.getElementById('aphoto').value;
					  
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
				
				
				