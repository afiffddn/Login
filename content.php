<?php
if(isset($_GET['a']))
{
	$a = $_GET['a'];
	switch ($a) {
		case 1:
			include 'registration.php';
			break;

		case 2:
			include 'edit_student.php';
			break;	

		case 3:
			include 'registration_process.php';
			break;
	}
}
else
{
	include 'admin.php';
}
?>