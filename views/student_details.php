<?php
	session_start();
	
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	$result = getStudent();
	//$result1=getAllStudents()
	
	$con = getConnection();
		
		
        
       
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profiles</title>
</head>
<body>
	<center>

		<a href="parent_home.php"> Back</a> | 
		<a href="logout.php"> logout</a> 
		<br/>
		<?php
		
		     if(isset($_REQUEST["deleted"])){
				 echo "Data has been deleted";
			 }
		?>
		<br/>

		
		<table border=1>
			<tr>
				
				<td>Parent Id</td>
				<td>Parent Name</td>
				<td>Student ID</td>
				<td>Student Name</td>
				<td>Password</td>
				<td>Email</td>
				<td>Date of Birth</td>
				<td>Department</td>
				<td>Gender</td>
				<td>class</td>
				<td>Address</td>
				<td>Photo</td>
				<td>Type</td>
				<td>Action</td>
			</tr>

	<?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
		<tr>
			<td><?=$row['p_id']?></td>
			<td><?=$row['p_name']?></td>
			<td><?=$row['s_id']?></td>
			<td><?=$row['s_name']?></td>
			<td><?=$row['s_password']?></td>
			<td><?=$row['email']?></td>
			<td><?=$row['dob']?></td>
			<td><?=$row['dept']?></td>
			<td><?=$row['gender']?></td>
			<td><?=$row['class']?></td>
			<td><?=$row['adress']?></td>
			<td><?=$row['photo']?></td>
			<td><?=$row['type']?></td>

			
			<td>
			<a href="student_edit.php?id=<?=$row['s_id']?>">Edit</a> |
			<a href="deletestudents.php?s_id=<?=$row['s_id']?>">Delete</a> 
			</td>
		</tr>
	<?php } ?>

	</table>
</center>
<br>
<br>

<center>
		<h1 id="abc">Search Students</h1>
	

	 <form >
		<!-- <input type="text" id="term" name="term" onkeyup="abc()"> -->
		 <input list="browsers"id="term" name="browser"onkeyup="abc()">
 
  <!-- <datalist id="browsers">
  	
    <option value="SM RAHID HAQUE">
    <option value="sumaya jabin">

  </datalist>
 -->
	</form> 

	<br>
	<div id="result">
		
	</div>

	<script type="text/javascript">
		
		function abc(){
			var search = document.getElementById("term").value;
			var xhttp = new XMLHttpRequest();	
			
			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200){
			    	document.getElementById('result').innerHTML = this.responseText;
			    }
			};
			
			xhttp.open("GET", "search.php?key="+search, true);
			xhttp.send(); 
		}
	</script>
</center>
</body>
</html>

