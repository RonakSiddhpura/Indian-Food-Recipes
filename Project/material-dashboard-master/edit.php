<?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","new_project_db");
$q="select * from demo_image where id='$id'";
$c=mysqli_query($con,$q);
while($row=mysqli_fetch_array($c))
{
	$name=$row['name'];
	$dept=$row['dept'];
	$gender=$row['gender'];
	$image=$row['image'];
}





if(isset($_POST['btnok']))
{
	if(isset($_FILES['imgfl']['name']))
	{
		$newimage=$_FILES['imgfl']['name'];
		move_uploaded_file($_FILES['imgfl']['tmp_name'],"upload_img/".$newimage);
	
	}
	else{
		$newimage=$image;
	}
	
		if($_POST['deptsl']=="Select Department")
		{
			?>
			<script>
			alert("Select any department");
			</script>
			
			<?php
		}
	else
	{
	$name=$_POST['nmtxt'];
	$dept=$_POST['deptsl'];
	$gender=$_POST['gnrbtn'];
	$image=$_FILES['imgfl']['name'];
	
	$con=mysqli_connect("localhost","root","","new_project_db");
	
	$q="update demo_image set name='$name',dept='$dept',gender='$gender',image='$newimage' where id='$id'";
	
	$c=mysqli_query($con,$q);
	
	if($c)
	{
		?>
		<script>
			window.location="viewcat.php";
		</script>
		<?php
	}
	else
	{
		echo "Errroorrrr";
	}
	}
}
?>
<html>
	<form action="#" method="post" enctype="multipart/form-data">
		<input type="text" name="nmtxt" value="<?php echo $name;?>" required /><br/><br/>

<select name="deptsl" required>
			<option>Select Department</option>
			<option>CE</option>
			<option>IT</option>
			<option>EE</option>
			<option>EC</option>
			<option>MECH</option>
			<option>CIVIL</option>
			
		</select><br/><br/>
		
		Gender <input type="radio" name="gnrbtn" checked value="Male"/>Male
				<input type="radio" name="gnrbtn" value="Female"/>Female<br/><br/>
		
		<img src="upload_img/<?php echo $image;?>" height=100 width=100/><br/><br/>
		Image<input type="file" name="imgfl" />
		<br/><br/>	
		<input type="submit" name="btnok" value="Insert"/>
		
	</form>
</html>