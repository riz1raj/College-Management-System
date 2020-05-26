<?php
include '../service/config.php';
if(isset($_POST['submit'])){
    if(!$_FILES['fileToUpload']['name'] == ""){
        $errors = array();
    $name1 = $_FILES['fileToUpload']['name'];
    $tmp_name = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_size = $_FILES['fileToUpload']['size'];
    $name = uniqid().$name1;
    
    if($file_size > 2097152*5){
        header("location: ../views/uploadHW.php?success=0");
        $errors[] = "File size must me 10mb or lower!";
    }else{
        move_uploaded_file($tmp_name,"../studentHW-file/".$name);
        header("location: ../views/uploadHW.php?success=1");
    }
    
    }else{
        header("location: ../views/uploadHW.php");
    } 
}else{
    header("location: ../views/uploadHW.php");
}

?>