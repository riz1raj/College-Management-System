       <!DOCTYPE html>
				<html>
				<head>
				        <title>Books Registration</title>
				</head>
				
				<body>
				<br/>
				<center>
				<img src="book.jpg" width="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="../php/BooksCheck.php" method="post" onsubmit="return check()" enctype="multipart/form-data">
				<center>
				
				<fieldset>
				
				<legend><b>Book Registration</b></legend>
				
				<table border=0>
				
				
				<tr>
				<td>
				Book Name <br/>
                      <input type="text" name="bname" id="b_name">
                </td>					  
				</tr>
				
				
				
				<tr>
				<td>
				Book Author <br/>
                      <input type="text" name="bauthor" id="b_author">
					  
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				
				
				
			    
				
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
			 
				
				<td><input type="submit" name="submit28"  value="Submit" onclick="ajax()"></td>
				
				
				
				
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
			var name= document.getElementById('b_name').value;
			
			var author=document.getElementById('b_author').value;
			
			var photo=document.getElementById('aphoto').value;
		    
			
			if(name=="")
		{
			alert("Please Enter Book Name");
			return false;
			
		}
		
			else if(name.length<4)
		{
			alert("Book Name is too Short");
			
			return false;
			
		}
		
		
		
		else if(author=="")
		{
			alert("Please Enter the Author of the Book");
			return false;
			
		}
		else if(author.length<4)
		{
			alert("Book Author name is too short");
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