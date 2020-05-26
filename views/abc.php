<?php
	
	//require_once('db.php');

	$search = $_GET['key'];

	$con = mysqli_connect('127.0.0.1', 'root', '', 'college');
		$sql = "SELECT s_id, s_name,s_password,email,dob,gender,null as bldgrp,null as salary,class,dept,photo,type FROM student where s_name like '%{$search}%'
	UNION ALL
	SELECT t_id, t_name,t_password,email,dob,gender,bldgrp,salary,null as class,dept,photo,type FROM teacher where t_name like '%{$search}%'
	UNION ALL
	SELECT p_id, p_name,p_password,email,dob,gender,bldgrp,salary,null as class,null as dept,photo,type FROM parent where p_name like '%{$search}%'";
	$result = mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);

	//echo $sql;

	if($count > 0){

		$data = "

         <table border=1>
		 
		 <tr>
		      <td colspan=12><center><b>User Details</b></center></td>
		 
		 </tr>
		 
		 <tr>
		     <td><b><center>ID</center></b></td>
			 <td><center><b>Name</b></center></td>
			 <td><center><b>Password</b></center></td>
			 <td><center><b>Email</b></center></td>
			 <td><center><b>Date of Birth</b></center></td>
			 <td><center><b>Gender</b></center></td>
			 <td><center><b>Blood Group</b></center></td>
			 <td><center><b>Salary</b></center></td>
			 <td><center><b>Class</b></center></td>
			 <td><center><b>Department</b></center></td>
			
			 <td><b>User Type</b></td>
		
		 
		 </tr>";

		while($row = mysqli_fetch_assoc($result)){
			$data .= "<tr>
		     <td>{$row['s_id']}</td>
			 <td>{$row['s_name']}</td>
			 <td>{$row['s_password']}</td>
			 <td>{$row['email']}</td>
			 <td>{$row['dob']}</td>
			 <td>{$row['gender']}</td>
			 <td>{$row['bldgrp']}</td>
			 <td>{$row['salary']}</td>
			 <td>{$row['class']}</td>
			<td>{$row['dept']}</td>
		 
			 <td>{$row['type']}</td>
			
			
		 
		 </tr>";
		}

		$data .= "</table>";
		echo $data;

	}else{
		echo "No result found!";
	}
?>