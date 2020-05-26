<?php   
    session_start();
    include '../service/config.php';
   
?>


<!DOCTYPE html>
<html>
 <head>
        <title>Upload Home Work</title>
</head>
<body>
     <center>
<fieldset>
    
    

        
        <legend><h2>Upload Your Home Work Here</h2></legend>
        
        <br>
        <br>
        
        
<form action="../php/upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload" name="submit">
</form>

        <br>
        <br>
        <?php 
             if(isset($_GET["success"])){

                  if($_GET["success"]){
                       echo '<b style="color:green;">File successfully Upload</b>';
                  }else{
                    echo '<b style="color:red;">File upload faild, file size must me 10mb or lower!</b>';
                  }
             }
             
             ?>
        <br>
<a href="student.php">Student Page</a>
    </center>

    
</fieldset>

   



</body>
</html>