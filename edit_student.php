<?php
include 'Library_db.php';
$sql = mysqli_query($con,"SELECT * FROM student");
?>

<form action="" method="POST">
<table>
	<tr>
		<td>Student Name</td>
		<td>:</td>
		<td>
			<select name="student">
				<?php
					while($row=mysqli_fetch_array($sql))
					{
						echo "<option value=$row[Student_Id]>$row[Student_Name]</option>";
					}
				?>
			</select>
		</td>
	</tr>

	<tr>
		<td><input type="submit" value="Search" name="submit"></td>
	</tr>

</table>
</form>

<?php
if(isset($_POST['submit']))
{
	$student=$_POST['student'];

	$sql2=mysqli_query($con,"SELECT * FROM student WHERE Student_Id = '$student'");

	echo "<table border=1>";
	echo "<tr>";
	echo "<td>Student Name</td>";
	echo "<td>Student Address</td>";
	echo "<td>Edit</td>";
	echo "</tr>";

	while($row1=mysqli_fetch_array($sql2))
	{
		echo "<tr>";
		echo "<td>$row1[Student_Name]</td>";
		echo "<td>$row1[Student_Address]</td>";
		echo "<td><a href=edit_process.php?Student_Id=$row1[Student_Id]>Edit</a></td>";
		echo "<td><a href=delete_process.php?Student_Id=$row1[Student_Id]>Delete</a></td>";
		echo "</tr>";
	}

	echo "</table>";
}
?>