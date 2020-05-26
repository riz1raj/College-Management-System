<?php   
    session_start();
    include '../service/config.php';
    
    $id = $_SESSION['user2']['student_id'];
    $sql = "SELECT * FROM student_data WHERE student_id = '$id'";
		$result = mysqli_query($conn, $sql) or die("query faild");
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
   
    <title>Profile</title>
</head>
<body>
    <center>
	  <fieldset>
	 <legend><h2> <center>Student Profile</center> </h2></legend>
    <?php 
             if(isset($_GET["success"])){

                  if($_GET["success"]){
                       echo '<b style="color:green;">Profile successfully Update</b>';
                  }else{
                    echo '<b style="color:red;">Somthing worng</b>';
                  }
             }
             
             ?>
             <br>
        	<a href="../php/update-profile.php?id=<?= $row['student_id']?>"><b>Update profile</b></a>
            <table  border="1" width="500px">
            <tr>
				
            <td>
               <a>profile photo</a>
            </td>
       <td>
       <center><a><img src="../student_photo/<?= $row['image']?>" width="80px"  alt=""></a></center>
            </td>
    
    </tr> 
			
    <tr>
				
				<td>
                       <a>ID</a>
                    </td>
					<td>
                       <center><a><?= $row['student_id']?></a></center>
                    </td>
				</tr>

				<tr>
				
				<td>
                       <a>Name</a>
                    </td>
					<td>
                       <center><a><?= $row['student_name']?></a></center>
                    </td>
				</tr>

				<tr>
				
				<td>
                       <a>Department</a>
                    </td>
					<td>
                       <center><a><?= $row['student_dept']?></a></center>
                    </td>
				</tr>

				<tr>
				
				<td>
                       <a>Father Name</a>
                    </td>
					<td>
                    <center><a><?= $row['father_name']?></a></center>
                    </td>
				</tr>

				<tr>
				
				<td>
                       <a>Mother Name</a>
                    </td>
					<td>
                    <center><a><?= $row['mother_name']?></a></center>
                    </td>
				</tr>
				<tr>
				
				<td>
                       <a>Guardian Phone Number</a>
                    </td>
					<td>
                    <center><a><?= $row['guardian_number']?></a></center>
                    </td>
				</tr>

					<tr>
				
				<td>
                       <a>Nationality</a>
                    </td>
					<td>
                    <center><a><?= $row['nationality']?></a></center>
                    </td>
				</tr>

					<tr>
				
				<td>
                       <a>Religion</a>
                    </td>
					<td>
                    <center><a><?= $row['religion']?></a></center>
                    </td>
				</tr>
				
					<tr>
				
				<td>
                       <a>Blood Group</a>
                    </td>
					<td>
                    <center><a><?= $row['student_bldgrp']?></a></center>
                    </td>
				</tr>
				
				
				<tr>
				<td>
                       <a>Gender</a>
                    </td>
					<td>
                    <center><a><?= $row['student_gender']?></a></center>
                    </td>
				</tr>
				<tr>
				
				<td>
                       <a>DOB</a>
                    </td>
					<td>
                    <center><a><?= $row['student_dob']?></a></center>
                    </td>
				</tr>
				<tr>
				
				<td>
                       <a>Address</a>
                    </td>
					<td>
                    <center><a><?= $row['address']; } ?></a></center>
                    </td>
				</tr>
				
				<br>
				
				<tr>
				    <td colspan="2" ><br>
				         <center><a href='student.php'><b>Student Page</b></a></center><br>
				    </td>
				</tr>
	    
            </table>
        
        </center>
	    </fieldset>
    </form>
    
</body>
</html>