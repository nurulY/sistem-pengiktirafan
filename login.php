<?php
session_start();
include("connection.php");
$id = $_POST['username'];
$pass = $_POST['password'];
$sql = mysqli_query($conn,"select * from user where id='$id' and pass='$pass'");
$result=mysqli_fetch_array($sql);
if ($result<=0) {
	header("location:loginattemt.php");
	?>
<script type="text/javascript">
	alert("INVALID USERNAME or PASSWORD")
</script>
	<?php
}else{

$_SESSION['id']=$result['id'];
$_SESSION['pass']=$result['pass'];
header("location:main.php");
}
?>
