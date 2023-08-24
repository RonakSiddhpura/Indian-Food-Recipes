<?php
include 'header.php';

$id=$_REQUEST['cid'];
$con=mysqli_connect("localhost","root","","foodrecipes");
$q="select * from category where category_id='$id'";
$c=mysqli_query($con,$q);
while($row=mysqli_fetch_array($c))
{
	$id=$row['category_id'];
	$name=$row['category_nm'];

	$image=$row['category_image'];
}

if(isset($_POST['btnok']))
{
	if(isset($_FILES['imgfl']['name']))
	{
		$newimage=$_FILES['imgfl']['name'];
		move_uploaded_file($_FILES['imgfl']['tmp_name'],"upload_image/".$newimage);
	
	}
	else{
		$newimage=$image;
	}
	
		if($_POST['catsl']=="Select category")
		{
			?>
			<script>
			alert("Select any category");
			</script>
			
			<?php
		}
	else
	{
		
	$name=$_POST['nmtxt'];

	$cat=$_POST['catsl'];
	$image=$_FILES['imgfl']['name'];
	
	$con=mysqli_connect("localhost","root","","foodrecipes");
	
	$q="update category SET category_nm='$name' ,category_image='$image' WHERE category_id='$cat'";
	
	$c=mysqli_query($con,$q);
	
	if($c)
	{
		?>
		<script>
			window.location="managecategory.php";
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
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h3 class="text-white text-capitalize ps-3"> Listing Recipe </h3>
              </div>
            </div>
			
            <div class="card-body px-0 pb-2">
          
              <div class="table-responsive p-0">
	<form action="#" method="post" enctype="multipart/form-data">
		<select name="catsl" required>
			<option>Select category</option>
			<option>01</option>
			<option>02</option>
			<option>03</option>
			<option>04</option>
		</select><br/><br/>
		<input type="text" name="nmtxt" value="<?php echo $name ?>"  /><br/><br/>

		
		
		
		<img src="upload_image/<?php echo $image;?>" height=100 width=100/><br/><br/>
		Image<input type="file" name="imgfl" />
		<br/><br/>	
		<input type="submit" name="btnok" value="Insert"/>
		
	</form>
 </div>
            </div>
          </div>
        </div>
      </div>
      
     
    </div>

<?php
  include 'footer.php';
?>