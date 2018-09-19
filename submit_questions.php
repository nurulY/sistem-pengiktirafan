<?php

include("connection.php");

$question_title = $_POST["question_title"];
$question       = $_POST["question"];
$choice_one    = $_POST["choice_one"];
$choice_two    = $_POST["choice_two"];
$choice_three    = $_POST["choice_three"];
$choice_four    = $_POST["choice_four"];
$correct   = $_POST["correct"];

if ($correct == $choice_one or $correct == $choice_two or $correct == $choice_three or $correct == $choice_four){


$sql=mysqli_query($conn,"INSERT into table_for_questions (question_title,main_question,choice_one,choice_two,choice_three,choice_four,answer) VALUES ('$question_title', '$question', '$choice_one', '$choice_two', '$choice_three', '$choice_four', '$correct')");
header("location:admin.php");
if (!$sql) {
echo $conn->error;
}

}else{

header("location:admin.php?error=display");

}
?>