<?php
	
	require('db.php');
	
	function validate($a_name, $a_password){

		$conn = getConnection();
		$sql = "select * from admin where a_name='{$a_name}' and a_password='{$a_password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}
	
	function validate2($s_name, $s_password){

		$conn = getConnection();
		$sql = "select * from student_data where student_name='{$s_name}' and student_pwd='{$s_password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}
	
	function getComplainInfo(){
		
		$conn = getConnection();
		$sql = "select * from complaint";
		$result = mysqli_query($conn, $sql);
		return $result;
		
	}


	function getCourseInfo(){
		$conn = getConnection();
		$sql = "select * from course";
		$result = mysqli_query($conn, $sql);
		return $result;
	}
	
	function getStudentInfoUpdate(){
		$conn = getConnection();
		$getid=$_REQUEST['edit_sid'];
		$sql = "select * from student where s_id=$getid";
		$result = mysqli_query($conn, $sql);
		return $result;
	}
	
	function getTeacherInfoUpdate(){
		$conn = getConnection();
		$getid=$_REQUEST['edit_tid'];
		$sql = "select * from teacher where t_id=$getid";
		$result = mysqli_query($conn, $sql);
		return $result;
	}
	
	function getParentInfoUpdate(){
		$conn = getConnection();
		$getid=$_REQUEST['edit_pid'];
		$sql = "select * from parent where p_id=$getid";
		$result = mysqli_query($conn, $sql);
		return $result;
	}
	
	
	function getStudentInfo(){
		$conn = getConnection();
		$sql = "select * from student";
		$result = mysqli_query($conn, $sql);
		return $result;
	}
	
	function getStudentInfo1(){
		$conn = getConnection();
		$sql = "select * from student_data";
		$result = mysqli_query($conn, $sql);
		return $result;
	}
	
	function getTeacherInfo(){
		$conn = getConnection();
		$sql = "select * from teacher";
		$result = mysqli_query($conn, $sql);
		return $result;
	}
	
	
	function getParentInfo(){
		$conn = getConnection();
		$sql = "select * from parent";
		$result = mysqli_query($conn, $sql);
		return $result;
	}
	
	function getAdminInfo(){
		$conn = getConnection();
		$sql = "select * from parent";
		$result = mysqli_query($conn, $sql);
		return $result;
	}
	
	
	function getExamSchedule(){
		$conn = getConnection();
		$sql = "select * from examschedule";
		$result = mysqli_query($conn, $sql);
		return $result;
		
		
	}
	
	function getAdmissionInfo(){
		
		$conn = getConnection();
		$sql = "SELECT ad_test, ad_form, ad_fee, start FROM admission ORDER BY ad_id DESC LIMIT 1";
		$result = mysqli_query($conn, $sql);
		return $result;
		
	}
	/*
	function getAdmissionInfo(){
		
		$conn = getConnection();
		$sql = "SELECT MIN(ad_test) AS test, MIN(ad_form) AS form, MIN(ad_fee) AS fee, MIN(start) AS start  FROM admission ";
		$result = mysqli_query($conn, $sql);
		return $result;
		
	}
	*/
	
	
	function getUserInfo(){
		$conn = getConnection();
		$sql = "SELECT s_id, s_name,s_password,email,dob,gender,null as bldgrp,null as salary,class,dept,photo,type FROM student
	UNION ALL
	SELECT t_id, t_name,t_password,email,dob,gender,bldgrp,salary,null as class,dept,photo,type FROM teacher
	UNION ALL
	SELECT p_id, p_name,p_password,email,dob,gender,bldgrp,salary,null as class,null as dept,photo,type FROM parent ORDER by s_id";
	
	
	
   $result = mysqli_query($conn, $sql);
   return $result;
		
	}

       function DeleteStudent(){
		$con = getConnection();
		$getid=$_REQUEST['s_id'];
		$deletesql = "delete from student where s_id=$getid";
		$rundeletesql = mysqli_query($con, $deletesql);
		if($rundeletesql==true){
				
			header("location: ManipulateUser.php?deleted");
			}
		
	}
	
	function DeleteTeacher(){
		$con = getConnection();
		$getid=$_REQUEST['t_id'];
		$deletesql = "delete from teacher where t_id=$getid";
		$rundeletesql = mysqli_query($con, $deletesql);
		if($rundeletesql==true){
				
			header("location: ManipulateUser.php?deleted");
			}
		
	}
	
	function DeleteParent(){
		$con = getConnection();
		$getid=$_REQUEST['p_id'];
		$deletesql = "delete from parent where p_id=$getid";
		$rundeletesql = mysqli_query($con, $deletesql);
		if($rundeletesql==true){
				
			header("location: ManipulateUser.php?deleted");
			}
		
	}
	
	
	
	
	 


	
	
	
	function validate1($username, $password){

		$con1 = getConnection();
		$sql1 = "select * from parent where p_name='{$username}' and p_password='{$password}'";
		$_SESSION['p_name'] =$username;
		$result1 = mysqli_query($con1, $sql1);
		$user1 = mysqli_fetch_assoc($result1);

		return $user1;
	}


	function getAllParents(){
		$con = getConnection();
		$sql = "select * from parent";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	function getAllStudents(){
		$con = getConnection();
		$sql = "select * from student";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getParent(){
		$con = getConnection();
		if ($_SESSION['p_name']!="") {
        $name=$_SESSION['p_name'];
		$sql = "select * from parent where p_name='$name'";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	}
	function getStudent(){
		$con = getConnection();
		
		$name=$_SESSION['user1']['p_name'];
		$sql = "select * from parent,student where s_id=p_id and p_name='$name'";
		$result = mysqli_query($con, $sql);
		return $result;
	
    }
		function getStudents(){
		$con = getConnection();
		$name=$_SESSION['user1']['p_name'];
		$sql = "select * from parent,student where s_id=p_id and p_name='$name'";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	
	function getParents(){
		$con = getConnection();
		$getid=$_REQUEST["id"];
		$sql = "select * from parent where p_id='$getid'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

function getNotice(){
		$con = getConnection();
		$name=$_SESSION['user1']['p_name'];
		$sql = "select * from parent,student,notices where s_id=p_id and p_name='$name' and notices.class=student.class";
		$result = mysqli_query($con, $sql);
		return $result;
	
}
	
function getNotice1(){
		$con = getConnection();
		$name=$_SESSION['user1']['p_name'];
		$sql = "select * from parent,student,notices where s_id=p_id and p_name='$name' and notices.class=student.class and notice_type='make_up'";
		$result = mysqli_query($con, $sql);
		return $result;
	
}

function getNotice2(){
		$con = getConnection();
		$name=$_SESSION['user1']['p_name'];
		$sql = "select * from parent,student,notices where s_id=p_id and p_name='$name' and notices.class=student.class and notice_type='lab_exam'";
		$result = mysqli_query($con, $sql);
		return $result;
	
}

function getNotice3(){
		$con = getConnection();
		$name=$_SESSION['user1']['p_name'];
		$sql = "select * from parent,student,notices where s_id=p_id and p_name='$name' and notices.class=student.class and  notice_type='class_cancellation'";
		$result = mysqli_query($con, $sql);
		return $result;
	
}
	function getNote(){
		$con = getConnection();
		$name=$_SESSION['user1']['p_name'];
		$sql = "select * from parent,student,notes where s_id=p_id and p_name='$name' and notes.class=student.class";
		$result = mysqli_query($con, $sql);
		return $result;
	
}

function getNote1(){
		$con = getConnection();
	    $name=$_SESSION['user1']['p_name'];
		$sql = "select * from parent,student,notes where s_id=p_id and p_name='$name' and notes.class=student.class and notes.note_type='physics_note'";
		$result = mysqli_query($con, $sql);
		return $result;
	}


function getNote2(){
		$con = getConnection();
		$name=$_SESSION['user1']['p_name'];
		$sql = "select * from parent,student,notes where s_id=p_id and p_name='$name' and notes.class=student.class and notes.note_type='chemistry_note'";
		$result = mysqli_query($con, $sql);
		return $result;
	
}

function getNote3(){
		$con = getConnection();
		if ($_SESSION['p_name']!="") {
        $name=$_SESSION['p_name'];
		$sql = "select * from parent,student,notes where s_id=p_id and p_name='$name' and notes.class=student.class and notes.note_type='biology_note'";
		$result = mysqli_query($con, $sql);
		return $result;
	}
}

function getCroutine(){
		$con=getConnection();
		 $name=$_SESSION['user1']['p_name'];
		$sql = "select * from parent,student,course where s_id=p_id and p_name='$name'";
		$result = mysqli_query($con, $sql);
		return $result;
	}




function getResult(){
		$con=getConnection();
		 $name=$_SESSION['user1']['p_name'];
		$sql = "select * from parent,student,results where s_id=p_id and p_name='$name' and results.class=student.class";
		$result = mysqli_query($con, $sql);
		return $result;
	
}


function getAttendence(){
		$con=getConnection();
		 $name=$_SESSION['user1']['p_name'];
		$sql = "select * from parent,student,attendence where s_id=p_id and p_name='$name' and attendence.class=student.class";
		$result = mysqli_query($con, $sql);
		return $result;
}



function getschedule(){
		$con = getConnection();
		$name=$_SESSION['user1']['p_name'];
		$sql = "select * from parent,student,examschedule where s_id=p_id and p_name='$name' ";
		$result = mysqli_query($con, $sql);
		return $result;
	}


	function getFinancialinfo(){
		$con = getConnection();
		$name=$_SESSION['user1']['p_name'];
		$sql = "select * from parent,student,admission where s_id=p_id and p_name='$name'";
		$result = mysqli_query($con, $sql);
		return $result;
	
}

	function getComplaint(){
		$con = getConnection();
		$name=$_SESSION['user1']['p_name'];
		$sql = "select * from parent,student,complaint where s_id=p_id and p_name='$name' and complaint.class=student.class";
		$result = mysqli_query($con, $sql);
		return $result;
	}


	function getParentCreateComplaint(){
		$con = getConnection();
		if ($_SESSION['p_name']!="") {
        $name=$_SESSION['p_name'];
		$sql = "select * from parent,student,parent_createcomplaint where student.s_id=parent.s_id and parent.p_name='$name' and parent.p_name=parent_createcomplaint.p_name";
		$result = mysqli_query($con, $sql);
		return $result;
	}
}
        
           function DeleteParent1(){
		$con = getConnection();
		$getid=$_REQUEST["id"];
		$deletesql = "delete from parent where p_id=$getid";
		$rundeletesql = mysqli_query($con, $deletesql);
		if($rundeletesql==true){
				
			header("location: view_parents.php?deleted");
			}
		
	}

	 function DeleteStudent1(){
		$con = getConnection();
	   $getid=$_REQUEST["s_id"];
		$deletesql = "delete from student where s_id=$getid ";
		$rundeletesql = mysqli_query($con, $deletesql);
		if($rundeletesql==true){
				
			header("location: view_students.php?deleted");
			}
		
	
}
function subjectinfo(){
		$con = getConnection();
		$name=$_SESSION['user1']['p_name'];
		$sql = "select * from parent,student,subjectinfo where s_id=p_id and p_name='$name' and subjectinfo.class=student.class";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	
	function getpoll(){
		$con = getConnection();
		if ($_SESSION['p_name']!="") {
        $name=$_SESSION['p_name'];
		$sql = "select * from poll_question where poll_id=(select max(poll_id) from poll_question);";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	/*	function getpoll(){
		$con = getConnection();
		if ($_SESSION['p_name']!="") {
        $name=$_SESSION['p_name'];
		$sql = "select * from  where poll_id=(select max(poll_id) from poll_question);";
		$result = mysqli_query($con, $sql);
		return $result;
	}*/
}

?>

	
	
	
	


