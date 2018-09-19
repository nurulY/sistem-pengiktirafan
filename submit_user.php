<?php

$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$course=$_POST['course'];
$year=$_POST['year'];
$pass=$_POST['password'];

include("connection.php");

if (isset($_POST['submit'])) {
	


$sql = mysqli_query($conn,"INSERT INTO user (id,fname,lname,course,year,pass) values ('$id','$fname','$lname','$course','$year','$pass')");
header("location:tae.php");
  if (!$sql){
		echo $conn->error;
}
}
?>