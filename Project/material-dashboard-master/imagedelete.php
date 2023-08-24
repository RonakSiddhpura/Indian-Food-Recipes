<?php
$id=$_GET['rid'];
$con = mysqli_connect("localhost", "root", "", "foodrecipes");
	
	$qu = "delete from r_image WHERE recipe_id=$id";
	
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
		window.location="recipeimage.php";
		</script>
	<?php
	}
	
	
?>
