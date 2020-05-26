

<?php
	session_start();
	//print_r($_SESSION['user']);
	include('../service/db.php');
	
	?>	
	







<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
<br/>
<br/>
<br/> 
<br/>
<br/>
   <center>
       <table border=1>
	    <tr> 
		<td colspan=2><center><img src="filesantipur-bed-college-logopng-wikimedia-commons-college-logo-png-2400_1800.png" width="110px" height="110px"/> </center>
		          <center><b>Welcome to Admin Panel!! <br/> <?= $_SESSION['user']['a_name']?></b></center>
				  </td>
		
		</tr>
		
		<tr>
		       <td valign="top" width=200><br/><center><b>Menu</b></center>
			            
						
						<ul>
						   
                           <li><a href='../views/Students.php'>Register Students</a></li>
						   <li><a href='../views/Parents.php'>Register Parents</a></li>
                           <li><a href='../views/Teachers.php'>Register Teachers</a></li>
						    <li><a href='../views/ManipulateUser.php'>Manipulate User Info</a></li>
                           <li><a href='../views/Users.php'>User Details</a></li>
						    <li><a href='../views/ajax.html'>Search Users</a></li>
						   <li><a href='../views/ManipulateAdmin.php'>Manipulate <?= $_SESSION['user']['a_name']?>'s Info</a></li>
						   <li><a href='../views/RegisterCourses.php'>Offered Courses</a></li>
						   <li><a href='../views/SelectCourse.php'>Register Courses for Students</a></li>
						   <li><a href='../views/AdmitCourse.php'>Admit Courses for Teachers</a></li>
						   <li><a href='../views/Complain.php'>Complains from Users</a></li>
						   <li><a href='../views/Books.php'>Register Books</a></li>
						   <li><a href='../views/MakeSchedule.php'>Prepare Exam Schedule</a></li>
						   <li><a href='../views/PrepeareAdmission.php'>Student Admission Info</a></li>
						   <li><a href='../views/About.php'>About us</a></li>
						  
						   
						  
						   <li><a href='../views/Logout.php'>Sign out</a></li>
						   
						   
						   
						 
						   
						 
						  
						  
						  
                       </ul>
					   
			   </td>
			   
		
		
		
		<td width=600>
		      <img src="AiubPermanentCampus_6.jpg" width="600px" height="400px"/>
		</td>
		</tr>
		
		
		
	   
	   </table>
		</center>
</body>
</html>