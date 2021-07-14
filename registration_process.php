<?php
include 'Library_db.php';

$student_name =$_POST['stud_name'];
$student_add =$_POST['stud_add'];
$student_username =$_POST['uname'];
$student_pwd =$_POST['pwd'];

$sql=mysqli_query($con," INSERT INTO student(Student_Name,Student_Address,username,password,level) 
	VALUES('$student_name','$student_add','$student_username','$student_pwd','2')");
	
	if(!$sql)
	{
		echo "Fail to add record";
	}
	else
	{
		echo "Successfully Add 1 record!";
	}
?>