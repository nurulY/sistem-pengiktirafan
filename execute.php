<?php
session_start();
$id = $_SESSION['id'];
include("connection.php");
$choice = $_POST['choice'];

$check=mysqli_query($conn,"select * from final_questions where correct_ans = '$choice'");
$sql=mysqli_num_rows($check);
if ($sql<=0) {
	$query_select_user_info = mysqli_query($conn,"select * from user where id='$id'");
	if (!$query_select_user_info) {
		echo $conn->error;
	}
	$query_select_user_info_result=mysqli_fetch_array($query_select_user_info);
	$firstname = $query_select_user_info_result['fname'];
		$lastname = $query_select_user_info_result['lname'];
			$pic = $query_select_user_info_result['pic'];


// inserting to list
 $query_to_insert=mysqli_query($conn,"INSERT INTO loser (fname,lname,rank,id,pic) values('$firstname','$lastname',0,'$id','$pic')");

if (!$query_to_insert) {
	echo $conn->error;
}
 $query_to_select=mysqli_query($conn,"select counting from loser");
$rank = mysqli_fetch_array($query_to_select);
$final = $rank['counting'] + 1;

$update = mysqli_query($conn, "update loser set counting='$final'");
$update_again = mysqli_query($conn, "update loser set rank='$final' where id='$id'");
$update_mark=mysqli_query($conn,"update user set mark='done' where id='$id'");
}else{
	$query_select_user_info = mysqli_query($conn,"select * from user where id='$id'");
	if (!$query_select_user_info) {
		echo $conn->error;
	}
	$query_select_user_info_result=mysqli_fetch_array($query_select_user_info);
	$firstname = $query_select_user_info_result['fname'];
		$lastname = $query_select_user_info_result['lname'];
			$pic = $query_select_user_info_result['pic'];


// inserting to list
 $query_to_insert=mysqli_query($conn,"INSERT INTO list (fname,lname,rank,id,pic) values('$firstname','$lastname',0,'$id','$pic')");

if (!$query_to_insert) {
	echo $conn->error;
}

 $query_to_select=mysqli_query($conn,"select counting from list");
$rank = mysqli_fetch_array($query_to_select);
$final = $rank['counting'] + 1;

$update = mysqli_query($conn, "update list set counting='$final'");
$update_again = mysqli_query($conn, "update list set rank='$final' where id='$id'");
$update_mark=mysqli_query($conn,"update user set mark='done' where id='$id'");


}
?>