<?php
	
	//require_once('db.php');

	$search = $_GET['key'];

	$con = mysqli_connect('127.0.0.1', 'root', '', 'college');
	$search = $_GET['key'];

	   //  $conn = getConnection();
	$sql = "select * from student where s_name like '%{$search}%'";
	$result = mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);

	//echo $sql;

	if($count > 0){

		$data = "<table border=1>
				<tr>
					<td>Student ID</td>
					<td>Student Name</td>
					<td>Password</td>
					<td>Email</td>
					<td>DOB</td>
					<td>Department</td>
					<td>Gender</td>
					<td>Class</td>
					<td>address</td>
					<td>photo</td>
					
				</tr>";

		while($row = mysqli_fetch_assoc($result)){
			$data .= "<tr>
					<td>{$row['s_id']}</td>
					<td>{$row['s_name']}</td>
					<td>{$row['s_password']}</td>
					<td>{$row['email']}</td>
					<td>{$row['dob']}</td>
					<td>{$row['dept']}</td>
					<td>{$row['gender']}</td>
					<td>{$row['class']}</td>
					<td>{$row['adress']}</td>
					<td>{$row['photo']}</td>
				
			        </tr>";
		}

		$data .= "</table>";
		echo $data;

	}else{
		echo "No result found!";
	}
?>
