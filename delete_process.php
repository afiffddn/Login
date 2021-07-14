<h3>Delete Student Record</h3>

<?php
include 'Library_db.php';
$student=$_GET['Student_Id'];

$sql = mysqli_query($con,"DELETE FROM student WHERE Student_Id = '$student'");

if(!$sql)
{
	echo "Fail to delete record";
}
else
{
	echo "Successfully delete one record";
}

?>