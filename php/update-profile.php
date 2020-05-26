<?php 
include '../service/config.php';
if(isset($_GET['id'])){

    $id = $_GET['id'];
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
	 
            <table  border="1" width="500px">
            <tr>
				
            <td>
               <a>profile photo</a>
            </td>
       <td><form action="update_profile.php" method="post" enctype="multipart/form-data">
       <input type="hidden" name="id" value="<?= $row['student_id']?>">
               <center><a><img src="../student_photo/<?= $row['image']?>" width="80px"  alt=""><br><input type="file" name="image" id=""></a></center>
            </td>
    
    </tr> 
			
				
				<tr>
				
				<td>
                       <a>Name</a>
                    </td>
					<td>
                       <center><a><input required type="text" name="name" value="<?= $row['student_name']?>"></a></center>
                    </td>
				</tr>

				<tr>
				
				<td>
                       <a>Department</a>
                    </td>
					<td>
                       <center><a><input required type="text" name="dept" value="<?= $row['student_dept']?>"></a></center>
                    </td>
				</tr>

				<tr>
				
				<td>
                       <a>Father Name</a>
                    </td>
					<td>
                    <center><a><input required type="text" name="fname" value="<?= $row['father_name']?>"></a></center>
                    </td>
				</tr>

				<tr>
				
				<td>
                       <a>Mother Name</a>
                    </td>
					<td>
                    <center><a><input required type="text" name="mname" value="<?= $row['mother_name']?>"></a></center>
                    </td>
				</tr>
				<tr>
				
				<td>
                       <a>Guardian Phone Number</a>
                    </td>
					<td>
                    <center><a><input required type="cal" name="gnumber" value="<?= $row['guardian_number']?>"></a></center>
                    </td>
				</tr>

					<tr>
				
				<td>
                       <a>Nationality</a>
                    </td>
					<td>
                    <center><a><input required type="text" name="nalty" value="<?= $row['nationality']?>"></a></center>
                    </td>
				</tr>

					<tr>
				
				<td>
                       <a>Religion</a>
                    </td>
					<td>
                    <center><a><input required type="text" name="religion" value="<?= $row['religion']?>"></a></center>
                    </td>
				</tr>
				
					<tr>
				
				<td>
                       <a>Blood Group</a>
                    </td>
					<td>
                    <center><a><input required type="text" name="bldgrp" value="<?= $row['student_bldgrp']?>"></a></center>
                    </td>
				</tr>
				
				
				<tr>
				<td>
                       <a>Gender</a>
                    </td>
					<td>
                    <center><a><input required type="text" name="gender" value="<?= $row['student_gender']?>"></a></center>
                    </td>
				</tr>
				<tr>
				
				<td>
                       <a>DOB</a>
                    </td>
					<td>
                    <center><a><input required type="date" name="dob" value="<?= $row['student_dob']?>"></a></center>
                    </td>
				</tr>
				<tr>
				
				<td>
                       <a>Address</a>
                    </td>
					<td>
                    <center><a><input required type="text" name="address" value="<?= $row['address']?>"></a></center>
                    </td>
				</tr>
				
				<br>
				
				<tr>
				    <td colspan="2" ><br>
				         <center><input required name="submit" type="submit"></center><br>
				    </td>
				</tr>
	    
            </table>
        
        </center>
	    </fieldset>
    </form>
        <?php } } ?>
</body>
</html>