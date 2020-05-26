


<?php
                  $tname=$tid=$tpwd=$temail=$tdob=$tbldgrp=$tgender=$tsalary=$tmarry=$tdept="";

                  $errtname=$errtid=$errtpwd=$errtemail=$errtdob=$errtbldgrp=$errtgender=$errtsalary=$errtmarry=$errtdept="";

                 
				 
				 if($_SERVER["REQUEST_METHOD"] == "POST"){
					 $tname = trim($_POST['tname']);
					 $tid= trim($_POST['tid']);
					 $tpwd= trim($_POST['tpwd']);
					 $temail=trim($_POST['temail']);
					 
					 if(empty($tname)){                          // Valtidation for tname
						 $errtname="Your tname cannot be empty";
					 }
					 else if (!preg_match("/^[a-zA-Z ]*$/",$tname)) {   //for strarting the character with a letter (hint: taken from [1] w3schools)
                     $errtname = "Only letters and white space allowed";
                     }
					 else if(strlen($tname)<3){
						 $errtname="Length of the tname must be greater than 3";
					 }
					 
					 else{
						 $tname=$_POST['tname'];
					 }
					 
					 
					 if(empty($tid)){                    //Valtidation for tid
						 $errtid="Fill your ID!!!";
					 }
					 else if(strlen($tid)<4){
						 $errtid="ID cannot be less than 4 number";
					 }
					 else{
						 $tid=$_POST['tid'];
					 }
					 
					 
					 if(empty($tpwd)){                 //Valtidation for password
						 $errtpwd="Fill your Password!!!";
					 }
					 else if(strlen($tpwd)<6){
						 $errtpwd="Password must be more than 6 characters";
					 }
					 else{
						 $tpwd=$_POST['tpwd'];
					 }
					 
					 if(empty($temail)){               // Valtidation for temail
						 $errtemail="Email field cannot be empty";
					 }
					 
					 else if (!filter_var($temail, FILTER_VALIDATE_EMAIL)){    //for proper temail format (hint: taken from [2] w3schools)
						 $errtemail="Invaltid temail format";
					 }
					 else{
						 $temail=$_POST['temail'];
					 }
					 
					 
					  if(empty($_POST['tdob'])){     // Valtidation for DOB
                    $errtdob = "What is ur DOB?!!!!";
                    }
                      else{
                        $tdob = $_POST['tdob'];
                      }
					 
					 
					 
					 if(empty($_POST['tgender'])){  // Valtidation for tgender
                    $errtgender = "What is ur tgender?!!!!";
                    }
                      else{
                        $tgender = $_POST['tgender'];
                      }
					  
					  if(empty($_POST['tsalary'])){  // Valtidation for tsalary
                    $errtsalary = "Please enter the tsalary";
                    }
                      else{
                        $tsalary = $_POST['tsalary'];
                      }
					  
					  if(empty($_POST['Blood'])){ //Valtidation for blood group
						 $errtbldgrp="please give blood group";
					 }
					 else{
						 $tbldgrp=$_POST['Blood'];
					 }
					 
					 
					  if(empty($_POST['dept'])){     // Valtidation for Dept
                    $errtdept = "What is ur DEPT?!!!!";
                    }
                      else{
                        $tdept = $_POST['dept'];
                      }
					  
					  if(empty($_POST['tmarry'])){  // Valtidation for marry
                    $errtmarry = "Please fill the field";
                    }
                      else{
                        $tmarry = $_POST['tmarry'];
                      }
					 
					 
                    if($errtid==null && $errtname==null && $errtpwd==null && $errtemail==null && $errtsalary==null){
				    $data4 =  $tid."|".$tpwd."|".$tname."|".$temail."|".$tdob."|".$tgender."|".$tbldgrp."|".$tdept."|".$tmarry."\r\n";
                    $file4=fopen('teacher.txt', 'a');
                    fwrite($file4, $data4);
                    fclose($file4);
					} 
				 }
				 
				 
				 
				 
				 
				 
				  

?>

                <!DOCTYPE html>
				<html>
				<head>
				       <title>Teacher Registration</title>
				</head>
				
				<body>
				<br/>
				<center>
				<img src="teacher.png" wtidth="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="../php/TeachersCheck.php" method="post" onsubmit="return check()" enctype="multipart/form-data">
				<center>
				
				<fieldset>
				
				<legend><b>Teacher Registration</b></legend>
				
				<table border=0>
				
				
				<tr>
				<td>
				Teacher Name <br/>
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
			    Department <br/>
				</td>
				</tr>
				<tr>
				<td>
				<select name="dept" id="tdept">
							<option value="">Select Department</option>
							<option value="cse">cse</option>
							<option value="eee">eee</option>
							<option value="bba">bba</option>
							
						</select>
						
						 
			 
			 </td>
			 </tr>
			 
			 
				
				<tr>
			    <td>
			    Married Status <br/>
				<input type="radio" name="tmarry" id="mar1" value="Married">Married
				<input type="radio" name="tmarry" id="mar2" value="Not Married">Not Married
				
				
				
				
			 
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
			 
				
				<td><input type="submit" name="submit5"  value="Register" onclick="ajax()"></td>
				
				<td><input type="reset" name="" value="Reset"></td>
				
				
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
			var name= document.getElementById('aname').value;
			
			var pass=document.getElementById('apass').value;
			var email=document.getElementById('aemail').value;
			var dob=document.getElementById('adob').value;
			var bld=document.getElementById('bldGrp').value;
			var salary=document.getElementById('asalary').value;
			var dept=document.getElementById('tdept').value;
			var photo=document.getElementById('aphoto').value;
		    
			
			if(name=="")
		{
			alert("Please Enter Teacher's Name");
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
			alert("Email not Entered");
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
		
		else if(dept=="")
		{
			alert("Please State Department");
			return false;
			
		}
		
		else if(!document.getElementById('mar1').checked && !document.getElementById('mar2').checked)
		
		{
			 
			alert("Please Select Married Status");
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
				
				