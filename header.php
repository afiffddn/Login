<?php 
session_start(); 
include 'Library_db.php';

$username=$_SESSION['username'];

$sql = mysqli_query($con, "SELECT * FROM student WHERE username='$username'"); 
while($row=mysqli_fetch_array($sql))
{
echo "Welcome ".$row['Student_Name']; 
}
              
?>