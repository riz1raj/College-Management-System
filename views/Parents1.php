


<?php
                  $pname=$pid=$ppwd=$pemail=$pdob=$pbldgrp=$pgender=$psalary=$poccup="";

                  $errpname=$errpid=$errppwd=$errpemail=$errpdob=$errpbldgrp=$errpgender=$errpsalary=$errpoccup="";

                 
				 
				 if($_SERVER["REQUEST_METHOD"] == "POST"){
					 $pname = trim($_POST['pname']);
					 $pid= trim($_POST['pid']);
					 $ppwd= trim($_POST['ppwd']);
					 $pemail=trim($_POST['pemail']);
					 
					 if(empty($pname)){                          // Validation for pname
						 $errpname="Your pname cannot be empty";
					 }
					 else if (!preg_match("/^[a-zA-Z ]*$/",$pname)) {   //for strarting the character with a letter (hint: taken from [1] w3schools)
                     $errpname = "Only letters and white space allowed";
                     }
					 else if(strlen($pname)<3){
						 $errpname="Length of the pname must be greater than 3";
					 }
					 
					 else{
						 $pname=$_POST['pname'];
					 }
					 
					 
					 if(empty($pid)){                    //Validation for pid
						 $errpid="Fill your ID!!!";
					 }
					 else if(strlen($pid)<4){
						 $errpid="ID cannot be less than 4 number";
					 }
					 else{
						 $pid=$_POST['pid'];
					 }
					 
					 
					 if(empty($ppwd)){                 //Validation for password
						 $errppwd="Fill your Password!!!";
					 }
					 else if(strlen($ppwd)<6){
						 $errppwd="Password must be more than 6 characters";
					 }
					 else{
						 $ppwd=$_POST['ppwd'];
					 }
					 
					 if(empty($pemail)){               // Validation for pemail
						 $errpemail="Email field cannot be empty";
					 }
					 
					 else if (!filter_var($pemail, FILTER_VALIDATE_EMAIL)){    //for proper pemail format (hint: taken from [2] w3schools)
						 $errpemail="Invalpid pemail format";
					 }
					 else{
						 $pemail=$_POST['pemail'];
					 }
					 
					 
					  if(empty($_POST['pdob'])){     // Validation for DOB
                    $errpdob = "What is ur DOB?!!!!";
                    }
                      else{
                        $pdob = $_POST['pdob'];
                      }
					 
					 
					 
					 if(empty($_POST['pgender'])){  // Validation for pgender
                    $errpgender = "What is ur pgender?!!!!";
                    }
                      else{
                        $pgender = $_POST['pgender'];
                      }
					  
					  if(empty($_POST['psalary'])){  // Validation for psalary
                    $errpsalary = "Please enter the psalary";
                    }
                      else{
                        $psalary = $_POST['psalary'];
                      }
					  
					  if(empty($_POST['blood_grp'])){ //Validation for blood group
						 $errpbldgrp="please give blood group";
					 }
					 else{
						 $pbldgrp=$_POST['blood_grp'];
					 }
					 if(empty($_POST['poccup'])){ //Validation for Occupation
						 $errpoccup="please select occupation";
					 }
					 else{
						 $poccup=$_POST['poccup'];
					 }
					 
					 
                    
				 }
				 
				 
				 
				 
				 
				 
				  

?>

                 <!DOCTYPE html>
				<html>
				<head>
				       <title>Parents Registration</title>
				</head>
				
				<body>
				<br/>
				<center>
				<img src="parents.jpg" width="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="../php/ParentsCheck.php" method="post" onsubmit="return check()" enctype="multipart/form-data">
				<center>
				
				<fieldset>
				
				<legend><b>Parents Registration</b></legend>
				
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
			    Occupation <br/>
				</td>
				</tr>
				<tr>
				<td>
				<select name="occup" id="poccup">
							<option value="">Select Occupation</option>
							<option value="Medical Doctor">Medical Doctor</option>
					        <option value="Business">Business</option>
					        <option value="Engineer">Engineer</option>
					        <option value="Others">Others</option>
							
						</select>
						
						
			 
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
			 
				
				<td><input type="submit" name="submit6"  value="Register" onclick="ajax()"></td>
				
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
			var occup=document.getElementById('poccup').value;
			var photo=document.getElementById('aphoto').value;
		    
			
			if(name=="")
		{
			alert("Please Enter Parents Name");
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
		
		else if(occup=="")
		{
			alert("Please State Your Occupation");
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
				
				