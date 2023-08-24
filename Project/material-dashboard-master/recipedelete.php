<?php
$Rid=$_GET['id'];
$con = mysqli_connect("localhost", "root", "", "foodrecipes");
	
	$qu = "delete from r_details WHERE recipe_id=$Rid";
	
	$res = mysqli_query($con,$qu);
	if($qu)
	{
		?>
		<script>
		window.location="../material-dashboard-master/managerecipe.php";
		</script>
	<?php
	}
	else
	{
		?>
		<script>
		alert("Error");
		window.location="../material-dashboard-master/managerecipe.php";
		</script>
	<?php
	}
	
	
?>
