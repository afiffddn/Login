<?php
$con = mysqli_connect("localhost","root",""); // 1st FUNCTION/METHOD 3 parameter -hostname,username,password- allow web connect to host(server) MYSQL

$db = mysqli_select_db($con,"library_unisel"); // 2nd METHOD, connect to database

//if (!$con || !$db)
//{
//	echo "Not successfully connected to database or host";
//}
//else
//{
//	echo "Successfully connected to database or host";
//}

?>
