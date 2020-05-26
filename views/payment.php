 <!DOCTYPE html>
				<html>
				<head>
				       <title>Payment</title>
				</head>
				
				<body>
				<br/>
				<center>
				
				</center>
				</br>
				
				
				
				
				
				
				<form action="../php/paycheck.php" method="post" onsubmit="return check()" >
				<center>
				
				<fieldset>
				
				<legend><b>Payment</b></legend>
				
				<table border=0>
				
				
				<tr>
				<td>
				Student RefID <br/>
                      <input type="number" name="srefid" id="srefid">
					  
                </td>					  
				</tr>
				</tr>

				<tr>
				<td>
				Student Id:</br>
				<input type="number" name="sid" id="s_id"></td>
				
			    </td>
			</tr>
				
				
				<tr>
				<td>
				Student Name: <br/>
                      <input type="text" name="sname" id="sname">
					
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Application Summary <br/>
                      <input type="text" name="appsummary" id="appsummary">
					 
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Payment Amount <br/>
                      <input type="number" name="amount" id="amount">
					
					   
                </td>					  
				</tr>

				<tr>
				<td>
				 Trns. Refference ID <br/>
                      <input type="text" name="trefid" id="trefid">
					  
                </td>					  
				</tr>
				</tr>




				<tr>
				<td>Trans. Date:
			  	<input type="date" name="tdate" id="tdate" value=""></td>
			</tr>
				
				 
				
				
		
				
				
			
			 
				
				<td><input type="submit" name="submit"  value="Submit" onclick="ajax()"></td>
				
				<td><input type="reset" name="" value="Reset"></td>
				
				
			</tr>
			
			<tr>
			<td><a href='parent_home.php'>Back</a></td>
			
			</tr>
			
			
			
				
				</table>
				
				</center>
				
				</fieldset>
				
				</form>
				
			</body>
				
				
				
				
				
				 <script>
 
          function check(){
			var srefid= document.getElementById('srefid').value;
			var s_id= document.getElementById('s_id').value;
			var sname=document.getElementById('sname').value;
			var appsummary=document.getElementById('appsummary').value;
			var amount=document.getElementById('amount').value;
			var trefid=document.getElementById('trefid').value;
			var tdate=document.getElementById('tdate').value;
			
			if(srefid=="")
		{
			alert("Please Enter Student Ref. Id");
			return false;
			
		}
		
	
		else if(s_id=="")
		{
			alert("please given sid");
			
			return false;
			
		}
		
		
		else if(sname=="")
		{
			alert("student name Cannot be Empty!!!");
			return false;
			
		}

		else if(appsummary=="")
		{
			alert("Application Summary Cannot be Empty!!!");
			return false;
			
		}
		else if(amount=="")
		{
			alert("Amount Cannot be empty");
			return false;
			
		}
		else if(trefid=="")
		{
			alert("Transation Ref. Id Cannot be empty");
			return false;
			
		}
		
		else if(tdate=="")
		{
			alert("Transation date is not given!!!");
			return false;
			
		}
		
	
		else{
			return true;
		}
	
		
		
		
		
		}
        	
		
	
		 </script>
		 
		 <script type="text/javascript">
		         function ajax(){
						var srefid= document.getElementById('srefid').value;
			var s_id= document.getElementById('s_id').value;
			var sname=document.getElementById('sname').value;
			var appsummary=document.getElementById('appsummary').value;
			var amount=document.getElementById('amount').value;
			var trefid=document.getElementById('trefid').value;
			var tdate=document.getElementById('tdate').value;
					  var url="paycheck.php";
					  
					  var vars="Student Ref. Id: "+srefid+"Sid: "+s_id+" student Name:"+sname+" Application Summary:"+appsummary+" Amount:"+amount+" Trans Ref. Id:"+trefid+" Transation Date:"+tdate;
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
				
				