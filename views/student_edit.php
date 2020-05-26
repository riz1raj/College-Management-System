<?php
	session_start();
	
	//print_r($_SESSION['user']);
    //include "service/db.php";
	require_once('../service/functions.php');
	
	$result = getStudents();


	if(isset($_POST['submit'])){
		$s_id = $_POST['s_id'];
		$s_name = $_POST['s_name'];
		$s_pass = $_POST['s_password'];
		
		$email = $_POST['email'];
		$dob = $_POST['dob'];
		$dept = $_POST['dept'];
		$gender = $_POST['gender'];
		$class = $_POST['class'];
		$add = $_POST['adress'];
		  $con = getConnection();
	
       
        
		$sql = "UPDATE student SET s_name='$s_name',s_password='$s_pass',email='$email',dob='$dob',dept='$dept',gender='$gender', class='$class',adress='$add' where s_id='$s_id' ; ";
		if(mysqli_query($con, $sql)){
			$message = "Update Successfully";
			 header("Location: student_details.php");
		}else{
			echo "Error";
		}
			
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>

		<a href="parent_home.php"> Back</a> | 
		<a href="logout.php"> logout</a> 
		<br/>
		
		<br><br>
		

	
		
		
	
<form method="post">
	<table>


<?php	while($row = mysqli_fetch_assoc($result)){ ?>
	    	<tr>
				<td>Id:</td>
				<td><input type="text" readonly=""name="s_id" value="<?=$row['s_id']?>" ></td>
			</tr>
			<tr>
				<td>StudentName:</td>
				<td><input type="text" name="s_name" value="<?=$row['s_name']?>" ></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="text" name="s_password" value="<?=$row['s_password']?>" ></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" value="<?=$row['email']?>" ></td>
			</tr>
			<tr>
				<td>Date of Birth:</td>
				<td><input type="text" name="dob" value="<?=$row['dob']?>" ></td>
			</tr>
			<tr>
				<td>Department:</td>
				<td><input type="text" name="dept" value="<?=$row['dept']?>" ></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td><input type="text" name="gender" value="<?=$row['gender']?>" ></td>
			</tr>
			<tr>
				<td>Class:</td>
				<td><input type="text" name="class" value="<?=$row['class']?>" ></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type="text" name="adress" value="<?=$row['adress']?>" ></td>
			</tr>
		   
			
			<tr>
				<td><input type="submit" name="submit" value="Confirm"></td>
			</tr>
			
			
			<?php } ?>
		</table>
	</form>
	
</body>
</html>