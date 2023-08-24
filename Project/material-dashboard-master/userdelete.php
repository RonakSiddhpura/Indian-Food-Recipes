<?php
$id=$_GET['id'];
$con = mysqli_connect("localhost", "root", "", "foodrecipes");
	
	$qu = "delete from registration WHERE user_id=$id";
	
	$res = mysqli_query($con,$qu);
	if($qu)
	{
		?>
		<script>
		window.location="../material-dashboard-master/user.php";
		</script>
	<?php
	}
	else
	{
		?>
		<script>
		alert("Error");
		window.location="../material-dashboard-master/user.php";
		</script>
	<?php
	}
	
	
?>
