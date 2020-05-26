<?php
include '../service/config.php';
if(isset($_POST['submit'])){
    if(!empty($_POST['option'])){
        $vote_id = $_POST['option'];

    $sql = "UPDATE `poll` SET `votes`= votes + 1 WHERE id = '$vote_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        $sql1 = "SELECT * FROM poll WHERE id = '$vote_id'";
        $result1 = mysqli_query($conn, $sql1) or die("query faild");
        if($result1){
            $row = mysqli_fetch_assoc($result1);
            //setcookie("option_".$_POST['q_id'],$row['q_option'],time()+86400*30);
            header("location: ../poll/index1.php?success=1");
        }
    }
    
    }else{
        header("location: ..
		/poll/index1.php?success=0");
    }
}
?>