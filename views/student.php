<?php   
    session_start();
    include '../service/config.php';
    
?>



<html>
    <head>
        <title>Student Portal</title>
    </head>
<center>
<table border="1" width="700px">

       <img src="../image/portal.png" width="300px" height="100px"/>
        
        <h1>Welcome to Student Portal ! <?= $_SESSION['user2']['student_name']?></h1>
    

        <tr>
            <th colspan="2"><br><h1><i><strong>Student Menu</strong><br></h1></i></h1></th>
            
        </tr>
        <tr>
            <th colspan="2"><a href="profile.php"><h2><strong><br>Student Profile<br></strong></a></h2></th>
            
        </tr>

        <tr>
            <td><center><a href="reqtoAdm.php"><b>Complaint/Query</b></a><br><br></center> </td>
            <td><center><a href="course.php"><b>Course Selected</b> </a><br><br></center>
        </td>          
        </tr>
        <tr>
            <td>
                <center><a href="grades.php"><b>Grades Given By Teacher</b></a><br><br></center>
            </td>
            <td>
               <center><a href="financial.php"><b>Financal Info</b></a><br><br></center> 
            </td>
        </tr>

        <tr>
            <td>
                <center><a href="classRoutine1.php"><b>Class Routine</b></a><br><br></center>
                
            </td>
            <td>
                <center><a href="attendence1.php"><b>Attendence Info From Teacher</b></a><br><br></center>
                
            </td>
        </tr>        

        <tr>
            <td>
                <center><a href="examSchedule1.php"><b>Exam Schedule</b></a><br><br></center>
                
            </td>
            <td>
                <center><a href="requestToAdmin.php"><b>Upadte/Delete</b></a><br><br></center>
                
            </td>
        </tr>


        <tr>
            <td><center><a href="library.php"><b>Registered Book's</b></a><br><br></center>
                
            </td>
            <td><center><a href="uploadHW.php"><b>Upload Home Work For Teacher</b></a><br><br></center>
                
            </td>
        </tr>


        <tr>
            <td>
                <center><a href="contactTeacher.php"><b>Contact Teacher</b></a><br><br></center>
                
            </td>
            <td>
                <center><a href="notices.php"><b>Notices</b></a><br><br></center>
                
            </td>
        </tr>

        <tr>
            
            <td colspan="2">
                <center><h3><a href="../poll/index1.php"><b>Poll Answer</b></a></h3></center>
                
            </td>

        </tr>

    <tr >
        <td colspan="2"><center><br><a href="logout.php"><b>Log Out</b></a></center><br> </td>
    </tr>
    
    
    
    </center>
</table>
    
    
</html>