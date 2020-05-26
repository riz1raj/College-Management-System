<?php
include '../service/config.php';
if(isset($_POST['id'])){
    $id = $_POST['id'];
    
    $sql = "DELETE FROM `selectbook` WHERE b_id = '$id'";
    $result = mysqli_query($conn,$sql) or die("somthing woring!");
    if($result){
        echo '<b id="msg" style="color:red">Course deleted successfully</b>';
    }
   
}
?>