
<style type="text/css">
.list{
	width: 100%;
  background: white;
}
.image_name{
	width: 90%;
	margin: auto;
	height: 60px;
	padding: 5px;
	border-bottom: .5px solid rgba(25,25,25,.5);
}
.img img{
	width: 60px;
	height: 60px;
	border-radius: 100%;
}
.img{
	width: 18%;
	height: 60px;
	display: inline-block;
	
}
.name{
width: 75%;
display: inline-block;
position: relative;
bottom: 25px;
text-align: left;
padding: 10px;

left: 0px;
border-radius: 5px;
}

</style>
<?php
include("connection.php");

$query = mysqli_query($conn,"select * from list");

while ($row=mysqli_fetch_array($query)) {
?>

<div class="list"> 

	
	<div class="image_name">
		
<div class="img">
	<img src="<?php echo $row['pic']; ?>">
</div>
		<div class="name"> <label><div style="word-wrap: break-word;"><?php echo $row['fname']; ?></div></label>
					
			
        </div>

	</div>
	
	
</div>
<?php
}
?>