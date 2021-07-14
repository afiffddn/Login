<?php
include 'Library_db.php';

$student =$_GET['Student_Id'];
//echo $student
$sql = mysqli_query($con,"SELECT * FROM student WHERE Student_Id = '$student' ");
$result = mysqli_fetch_array($sql);

if(isset($_POST['Update']))
{

	$Student_Name = $_POST['Student_Name'];
	$Student_Address = $_POST['Student_Address'];
	$sql2 = mysqli_query($con,"UPDATE student SET Student_Name = '$Student_Name', Student_Address = '$Student_Address' WHERE Student_Id = '$student' ");

	if (!$sql2) 
	{
		echo "Update FAIL";
	}
	else
	{

		echo "Update SUCCESFUL";
	}

}

?>

<title>Update Student Record</title>

<form  action="" method="POST">
	
	<table>
			<tr>
				<td>Student Name</td>
				<td>:</td>
				<td><input type="text" name="Student_Name" value="<?php echo $result['Student_Name']; ?>"></td>
			</tr>
			<tr>
				<td>Student Address</td>
				<td>:</td>
				<td><input type="text" name="Student_Address" value="<?php echo $result['Student_Address']; ?>"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" disabled value="<?php echo $result['username']; ?>"></td>
			</tr>

			<tr>
				<td><input type="submit" name="Update" name="Update"></td>
			</tr>
	</table>
</form>
