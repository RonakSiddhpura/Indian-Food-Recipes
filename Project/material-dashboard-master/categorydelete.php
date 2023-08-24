<?php
$id=$_REQUEST['rid'];
$con = mysqli_connect("localhost", "root", "", "foodrecipes");
	
	$qu = "delete from category WHERE category_id=$id";
	
	$res = mysqli_query($con,$qu);
	if($qu)
	{
		?>
		<script>
		window.location="../material-dashboard-master/managecategory.php";
		</script>
	<?php
	}
	else
	{
		?>
		<script>
		alert("Error");
		window.location="../material-dashboard-master/managecategory.php";
		</script>
	<?php
	}
	
	$qu="delete from r_details WHERE category_id=$id";
	
	$res = mysqli_query($con,$qu);
	if($qu)
	{
		?>
		<script>
		window.location="../material-dashboard-master/managecategory.php";
		</script>
	<?php
	}
	else
	{
		?>
		<script>
		alert("Error");
		window.location="../material-dashboard-master/managecategory.php";
		</script>
	<?php
	}
?>
