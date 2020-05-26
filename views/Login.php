
<?php
	session_start();
?>

  <!DOCTYPE html>
					
					                 <head>
	           <title>Login</title>
	         </head>
			 
			 <body>
			 
			 <form action="../php/Logcheck.php" method="post">
			 <br/>
			 <br/>
			 <center> <img src="unnamed.png" width="100px" height="100px"/> </center>
			 <br/>
			 <br/>
			 
			 <center>
			
		
			 <fieldset>
			 <legend><b> Login</b></legend>
			 
			 
			 <table border="0">
			 
			 
			 
			 <tr>
			      <td>
				  User Name <br/>
				  <input type="text" name="name" value="">
				  
                  
	            
				  
				  
				  </td>
			 
			 
			 </tr>
			 <tr>
			 <td>
			    Password <br/>
				<input type="password" name="password" value="">
				
			 
			 </td>
			 </tr>
			 
			 </tr>
			 
			 <td>
			    
				<input type="submit" name="submit1" value="Login">
				<a href='Registration.php'>Register</a>
				
				 
			 
			 </td>
			 </tr>
			 
			 </html>