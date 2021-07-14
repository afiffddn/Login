<?php
include 'Library_db.php';

$sql = mysqli_query($con, "SELECT * FROM subject");
$sql2 = mysqli_query($con, "SELECT * FROM subject");
?>

<form>
	<table>
		<tr>
			<td>Subject </td>
			<td>: </td>
			<td>
				<select name="Subject">
				<?php

				 while($row=mysqli_fetch_array($sql)) 
				 {
					echo "<option>$row[Subject_Code]"." "."$row[Subject_Name]</option>";
				}	
				?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Subject </td>
			<td>: </td>
			<td>
				<?php
				 while($row=mysqli_fetch_array($sql2)) 
				 {
				 	echo "<input type='checkbox' name='subject'>$row[Subject_Code]"." "."$row[Subject_Name]";
				 	echo "<br>";
				 }
				?>
				</select>
			</td>
		</tr>
	</table>
</form>

