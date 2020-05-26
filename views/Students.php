


<?php
                  $sname=$sid=$spwd=$semail=$sdob=$sclass=$sgender=$sdept=$sadress="";

                  $errsname=$errsid=$errspwd=$errsemail=$errsdob=$errsclass=$errsgender=$errsdept=$errsadress="";

                 
				 
				 if($_SERVER["REQUEST_METHOD"] == "POST"){
					 $sname = trim($_POST['sname']);
					 $sid= trim($_POST['sid']);
					 $spwd= trim($_POST['spwd']);
					 $semail=trim($_POST['semail']);
					 
					 if(empty($sname)){                          // Validation for name
						 $errsname="Your name cannot be empty";
					 }
					 else if (!preg_match("/^[a-zA-Z ]*$/",$sname)) {   //for strarting the character with a letter (hint: taken from [1] w3schools)
                     $errsname = "Only letters and white space allowed";
                     }
					 else if(strlen($sname)<3){
						 $errsname="Length of the name must be greater than 3";
					 }
					 
					 else{
						 $sname=$_POST['sname'];
					 }
					 
					 
					 if(empty($sid)){                    //Validation for id
						 $errsid="Fill your ID!!!";
					 }
					 else if(strlen($sid)<4){
						 $errsid="ID cannot be less than 4 number";
					 }
					 else{
						 $sid=$_POST['sid'];
					 }
					 
					 
					 if(empty($spwd)){                 //Validation for password
						 $errspwd="Fill your Password!!!";
					 }
					 else if(strlen($spwd)<6){
						 $errspwd="Password must be more than 6 characters";
					 }
					 else{
						 $spwd=$_POST['spwd'];
					 }
					 
					 if(empty($semail)){               // Validation for email
						 $errsemail="Email field cannot be empty";
					 }
					 
					 else if (!filter_var($semail, FILTER_VALIDATE_EMAIL)){    //for proper email format (hint: taken from [2] w3schools)
						 $erremail="Invalid email format";
					 }
					 else{
						 $semail=$_POST['semail'];
					 }
					 
					 
					  if(empty($_POST['sdob'])){     // Validation for DOB
                    $errsdob = "What is ur DOB?!!!!";
                    }
                      else{
                        $sdob = $_POST['sdob'];
                      }
					 
					 
					 
					 if(empty($_POST['sgender'])){  // Validation for gender
                    $errsgender = "What is ur gender?!!!!";
                    }
                      else{
                        $sgender = $_POST['sgender'];
                      }
					  
					  if(empty($_POST['sclass'])){  // Validation for class
                    $errsclass = "Fill the class";
                    }
                      else{
                        $sclass = $_POST['sclass'];
                      }
					  
					  if(empty($_POST['sdept'])){ //Validation for department
						 $errsdept="Which dept??!!";
					 }
					 else{
						 $sdept=$_POST['sdept'];
					 }
					 
					 if(empty($_POST['sadress'])){ //Validation for address
						 $errsadress="Fill the adress";
					 }
					 else{
						 $sadress=$_POST['sadress'];
					 }
					 
					 
                   
				 }
				 
				 
				 
				 
				 
				 
				  

?>

                 <!DOCTYPE html>
				<html>
				<head>
				       <title>Student Registration</title>
				</head>
				
				<body>
				<br/>
				<center>
				<img src="Student.png" width="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="../php/StudentsCheck.php" method="post" onsubmit="return check()" enctype="multipart/form-data">
				<center>
				
				<fieldset>
				
				<legend><b>Student Registration</b></legend>
				
				<table border=0>
				
				
				<tr>
				<td>
				Student Name <br/>
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
			    Department <br/>
				</td>
				</tr>
				<tr>
				<td>
				<select name="dept" id="sdept">
							<option value="">Select Department</option>
							<option value="cse">cse</option>
							<option value="eee">eee</option>
							<option value="bba">bba</option>
							
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
				Class <br/>
                      <input type="number" name="class" id="sclass">
					    
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Adress <br/>
                      <input type="text" name="adress" id="sadress">
					    
					  
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
			 
				
				<td><input type="submit" name="submit2"  value="Register" onclick="ajax()"></td>
				
				<td><input type="reset" name="" value="Reset"></td>
				
				
			</tr>
			
			<tr>
			<td><a href='Home.php'>Home</a></td>
			
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
			var dept=document.getElementById('sdept').value;
			var cla=document.getElementById('sclass').value;
			var adress=document.getElementById('sadress').value;
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
		
		else if(email=="")
		{
			alert("Please Enter Your Email");
			return false;
			
		}
		
		else if(dob=="")
		{
			alert("DOB is not given!!!");
			return false;
			
		}
		
		else if(dept=="")
		{
			alert("Please Enter Department");
			return false;
			
		}
		
		else if(!document.getElementById('gen1').checked && !document.getElementById('gen2').checked && !document.getElementById('gen3').checked)
		{
			 
			alert("Please Select Gender");
			return false;
		}	 
		
		
		
		else if(cla=="")
		{
			alert("Please Enter Class");
			return false;
			
		}
		
		else if(adress=="")
		{
			alert("Please Enter Adress");
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
				
				