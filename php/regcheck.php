
<?php
session_start();
//ON['user'] = $user;
	include('../service/db.php');


                  $pname=$sid=$ppwd=$pemail=$pdob=$pbldgrp=$pgender=$psalary=$poccup=$photo=$ptype="";

                  $errpname=$errsid=$errppwd=$errpemail=$errpdob=$errpbldgrp=$errpgender=$errpsalary=$errpoccup=$errphoto=$errptype="";

                 
				 
 if(isset($_POST['submit1'])){

	session_destroy();


					 $pname = trim($_REQUEST['username']);
					 $sid= trim($_REQUEST['sid']);
					 $ppwd= trim($_REQUEST['password']);
					 $pemail=trim($_REQUEST['email']);
					 $pdob = $_REQUEST['dob'];
		             $pbldgrp = $_REQUEST['bloodGrp'];
		            // $pgender = $_REQUEST['gender'];
		             $poccup = $_REQUEST['occupation'];
		             $psalary = $_REQUEST['salary'];
		             $photo=$_FILES['photo']['name'];

		             $ptype = $_REQUEST['type'];
					 
					 if(empty($pname)){                          // Validation for pname
						 $errpname="Your pname cannot be empty";
						 $_SESSION['ename'] = $errpname;
						 header("Location: /Finalproject/views/registration.php");
					 }
					 else if (!preg_match("/^[a-zA-Z ]*$/",$pname)) {   //for strarting the character with a letter (hint: taken from [1] w3schools)
                     $errpname = "Only letters and white space allowed";
                      $_SESSION['name'] = $errpname;
					 }
                     
					 else if(strlen($pname)<3){
						 $errpname="Length of the pname must be greater than 3";
						  $_SESSION['name'] = $errpname;
					 }
					 
					 
					 else{
						 $pname=$_POST['username'];
					 }
					 
					 
					 if(empty($sid)){                    //Validation for pid
						 $errpid="Fill student ID!!!";
						   $_SESSION['sid'] = $errpid;
					 }
					 else if(strlen($sid)<4){
						 $errpid="ID cannot be less than 4 number";
						  $_SESSION['sid'] =  $errpid;
					 }
					 else{
						 $sid=$_POST['sid'];
					 }
					 
					 
					 if(empty($ppwd)){                 //Validation for password
						 $errppwd="Fill your Password!!!";
						  $_SESSION['pass'] = $errppwd;
					 }
					 else if(strlen($ppwd)<5){
						 $errppwd="Password must be more than 5 characters";
						  $_SESSION['pass'] = $errppwd;
					 }
					 else{
						 $ppwd=$_POST['password'];
					 }
					 
					 if(empty($pemail)){               // Validation for pemail
						 $errpemail="Email field cannot be empty";
						  $_SESSION['email'] =  $errpemail;
					 }
					 
					 else if (!filter_var($pemail, FILTER_VALIDATE_EMAIL)){    //for proper pemail format (hint: taken from [2] w3schools)
						 $errpemail="Invalpid pemail format";
						  $_SESSION['email'] =  $errpemail;
					 }
					 else{
						 $pemail=$_POST['email'];
					 }
					 
					 
					 if(empty($pdob)){     // Validation for DOB
                    $errpdob = "What is ur DOB?!!!!";
                    }
                      else{
                        $pdob = $_POST['dob'];
                      }
					 
					 
					 
					 // if(empty($pgender)){  // Validation for pgender
      //               $errpgender = "What is ur pgender?!!!!";
      //               }
      //                 else{
      //                   $pgender = $_POST['gender'];
      //                 }
					  
					  if(empty($psalary)){  // Validation for psalary
                    $errpsalary = "Please enter the psalary";
                    }
                      else{
                        $psalary = $_POST['salary'];
                      }
					  
					  if(empty($pbldgrp)){ //Validation for blood group
						 $errpbldgrp="please give blood group";
					 }
					 else{
						 $pbldgrp=$_POST['bloodGrp'];
					 }
					 if(empty($poccup)){ //Validation for Occupation
						 $errpoccup="please select occupation";
					 }
					 else{
						 $poccup=$_POST['occupation'];
					 }
					  if(empty($photo)){ //Validation for Occupation
						 $errphoto="please select photo";
					 }
					 else{
						 $photo=$_FILES['photo']['name'];
		$avatar_tmpName=$_FILES['photo']['tmp_name'];
		$location="../upload/";
		move_uploaded_file($avatar_tmpName,$location."$photo");
					 }
					  if(empty($ptype)){ //Validation for Occupation
						 $errptype="please select type";
					 }
					 else{
						 $ptype=$_POST['type'];
					 }
					
					/*if($errpname==null && $errsid==null && $errppwd=null && $errpemail==null && $errpdob== null && $errpbldgrp==null && $errpgender==null && $errpsalary==null && $errpoccup==null && $errphoto==null && $errptype==null){*/	

					if($pname!=null && $sid!=null && $ppwd!=null && $pemail!=null && $pdob!= null && $pbldgrp!=null && $pgender!=null && $psalary!=null && $poccup!=null && $photo!=null && $ptype!=null){	   	 

			 $conn = getConnection();	
          
        $sql= "insert into parent VALUES('','{$sid}','{$pname}','{$ppwd}','{$pemail}','{$pdob}','{$pbldgrp}','{$pgender}', '{$poccup}','{$psalary}','{$photo}','{$ptype }')";
           
		if(mysqli_query($conn, $sql)){
			echo "Registration done!";
		}
	}
	else{
			echo "Error";
		}
					
				
			}
					                
		 
		
	

	?>



 