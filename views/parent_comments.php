<?php

    session_start();
	include('../service/db.php');
	
	if(isset($_POST['submit'])){

//$dob = $_REQUEST['dob'];
	$comments = $_REQUEST['comments'];
	

    


		if($comments=="yes")
		{
                      $sql1=  "UPDATE `parent_poll` SET `yes`=yes+1 WHERE poll_id=(select max(poll_id) from poll_question ) ";
                      $conn = getConnection();
                      if(mysqli_query($conn, $sql1))
                      {
                      	 echo "done";
                      }
                      else
                      {
                      	 echo "error";
                      }
                     
		}
      
          

         else{
         	$sql2=  "UPDATE `parent_poll` SET `no`=no+1 WHERE poll_id=(select max(poll_id) from poll_question ) ";
         	$conn = getConnection();
                     if(mysqli_query($conn, $sql2))
                      {
                      	 echo "done";
                      }
                      else
                      {
                      	 echo "error";
                      }
                     
         }            
	
	}
	?>