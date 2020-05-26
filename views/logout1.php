<?php
	session_start();
	unset($_SESSION['user2']['student_id']);
	unset($_SESSION['user2']['student_name']);
	session_destroy();
	setcookie("idcookie",$id,time()-86400*10);
	setcookie("pwdcookie",$pwd,time()-86400*10);
	include '../services/config.php';
	header("location: ../index.php");

?>