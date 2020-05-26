<?php

    session_start();
	include('../service/db.php');
	
	if(isset($_POST['submit'])){
		$srefid = ($_REQUEST['srefid']);
		$sid= trim($_REQUEST['sid']);
	    $sname = $_REQUEST['sname'];
		$appsummary = $_REQUEST['appsummary'];
		$amount = $_REQUEST['amount'];
		$trefid = $_REQUEST['trefid'];
		$tdate = $_REQUEST['tdate'];
	
        $conn = getConnection();
		$sql = "insert into payment VALUES('{$srefid}','{$sid}','{$sname}','{$appsummary}','{$amount}','{$trefid}','{$tdate}')";
		if(mysqli_query($conn, $sql)){
			echo "payment done done!";
			echo "<br>";
		}else{
			echo "Error";
			echo "<br>";
		}
	}
	?>
	
	<?php

	$s_refid = $_POST['srefid'];
	$sid = $_POST['sid'];
	$sname = $_POST['sname'];
	$appsummary = $_POST['appsummary'];
	$amount = $_POST['amount'];
	$trefid = $_POST['trefid'];
	$tdate = $_POST['tdate'];
	
	
	sleep(5);
	echo "Student Ref. Id: ".$s_refid; 
	echo "<br>";
	echo "Student Id: ".$sid; 
	echo "<br>";
	echo "Student Name: ".$sname; 
	echo "<br>";
	echo "Application Summary: ".$appsummary;  
	echo "<br>";
	echo "Amount: ".$amount; 
	echo "<br>";
	echo "Transation Ref. Id: ".$trefid;
	echo "<br>";
    echo "Transation Date: ".$tdate;
	echo "<br>";

	//echo "Photo: ".$photo; 
?>
	