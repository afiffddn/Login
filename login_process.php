<?php
session_start();
include 'Library_db.php';
// the box name to capture the value
$username = $_POST['uname'];
$password = $_POST['pwd'];

$sql = mysqli_query($con,"SELECT * FROM student WHERE username ='$username' AND password ='$password' ");

$row=mysqli_fetch_array($sql);
$count =mysqli_num_rows($sql);

	if($count ==1)
	{
		if($row['level']=='1')
		{
			$_SESSION['username'] = $username;
			header("Location:index.php");
		}
		else
		{
			header("Location:user.php");
		}
	}
	else
	{
		echo "Incorrect username and password";
	}
?>