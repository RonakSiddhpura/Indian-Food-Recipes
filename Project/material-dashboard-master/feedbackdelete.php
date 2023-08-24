<?php
$cid=$_GET['id'];
$mail=$_GET['mail'];
$con = mysqli_connect("localhost", "root", "", "foodrecipes");
	
	$qu = "Delete from feedback WHERE  email='$mail'";
	
	$res = mysqli_query($con,$qu);
	if($qu)
	{
		?>
		<script>
		window.location="../material-dashboard-master/feedback.php";
		</script>
	<?php
	}
	else
	{
		?>
		<script>
		alert("Error");
		window.location="../material-dashboard-master/feedback.php";
		</script>
	<?php
	}
	
	
?>
