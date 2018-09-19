<?php
$id=$_POST["id"];
include('connection.php');

$mark=mysqli_query($conn,"SELECT mark from user where id='$id'");
$row=mysqli_fetch_array($mark);
if ($row['mark']=="done") {



$query = mysqli_query($conn, "select * from question_display");
$result = mysqli_fetch_array($query);
$question = $result['main_question'];
$choice_one = $result['choice_one'];
$choice_two = $result['choice_two'];
$choice_three = $result['choice_three'];
$choice_four = $result['choice_four'];
?>
<div class="questionaire">
	<span><?php echo $question; ?></span>
		</div>
		
<?php
}else{
$query = mysqli_query($conn, "select * from question_display");
$result = mysqli_fetch_array($query);
$question = $result['main_question'];
$choice_one = $result['choice_one'];
$choice_two = $result['choice_two'];
$choice_three = $result['choice_three'];
$choice_four = $result['choice_four'];
?>
<div class="questionaire">
	<span><?php echo $question; ?></span>
		</div>
		<div class="choice">
			<div class="choices"><span onclick="pop('<?php echo $choice_one; ?>')"><?php echo $choice_one; ?></span></div>
		<div class="choices"><span onclick="pop('<?php echo $choice_two; ?>')"><?php echo $choice_two; ?></span></div>
		<div class="choices"><span onclick="pop('<?php echo $choice_three; ?>')"><?php echo $choice_three; ?></span></div>
		<div class="choices"><span onclick="pop('<?php echo $choice_four; ?>')"><?php echo $choice_four; ?></span></div>
		</div>
<?php
}

?>
