

                 <!DOCTYPE html>
				<html>
				<head>
				       <title>Prepeare Admission Rules</title>
				</head>
				
				<body>
				<br/>
				<center>
				<img src="admission.png" width="200px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="../php/PrepeareAdmissionCheck.php" method="post" onsubmit="return check()" enctype="multipart/form-data">
				<center>
				
				<fieldset>
				
				<legend><b>Admission Information</b></legend>
				
				<table border=0>
				
				
				<tr>
				<td>
				Admission Test Date <br/>
                      <input type="date" name="a_test" id="atest">
					  
                </td>					  
				</tr>
				
				
				
				<tr>
				<td>
				Last Date Admission Form Collection<br/>
                      <input type="date" name="a_form" id="aform">
					
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Total Fees per Subject <br/>
                      <input type="text" name="a_fee" id="afee">
					
					  
                </td>					  
				</tr>
				
				
				<tr>
				<td>
				Class Start <br/>
                      <input type="text" name="start" id="astart">
					
					  
                </td>					  
				</tr>
				
				
			 
				<center>
				<td><input type="submit" name="submit30"  value="Prepeare"></td>
				</center>
				
				
				
			</tr>
			
			<tr>
			<center>
			
			<td><a href='Admission.php'>View Admission Details</a></td>
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
			var a_test= document.getElementById('atest').value;
			var a_form=document.getElementById('aform').value;
			var a_fee=document.getElementById('afee').value;
			var start=document.getElementById('astart').value;
			
		    
			
			if(a_test=="")
		{
			alert("Please Specifiy When Admission Test will be held");
			return false;
			
		}
		
			else if(a_form=="")
		{
			alert("Please Enter The Last Date of Form collection");
			
			return false;
			
		}
		
		
		
		else if(a_fee=="")
		{
			alert("Please Enter the Admission Fee");
			return false;
			
		}
		
		else if(start=="")
		{
			alert("Please Specify when class will be held");
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
				
				