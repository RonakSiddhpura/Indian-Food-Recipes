<?php

include 'header.php';

?>
 <?php

	// Establish connection with MySQL
	$con = mysqli_connect("localhost", "root", "", "foodrecipes");
		$cid=$_REQUEST['id'];
	$qu = "SELECT * from  r_details where  recipe_id='$cid'";
	$res = mysqli_query($con,$qu);
	while($row=mysqli_fetch_array($res))
	{
		   
	?>
<section id="blog" class="blog_detail clearfix">
 <div class="container">
  <div class="row">
    <div class="blog_d1 clearfix">
	<div class="recipe_1 clearfix">
     <div class="col-sm-12">
	   <h1>RECIPE DETAIL OF <?php echo $row['recipe_name'];?> </h1>
	 </div>
   </div>
	 <!-- <div class="col-sm-12">
	  <img src="img/1.jpg" class="iw"  style="margin-top:20px;" alt="img17">
	  <div class="blog_3">
	  <h4><?php echo $row['recipe_name'];?></h4>
	   
	   </div>
	 </div>
	</div>-->
	
    <h4><?php echo $row['recipe_name'];?></h4>
	<div class="blog_d2 clearfix">
	 <div class="col-sm-12">
       <ul>
		 
		 <li><?php echo $row['recipe_name'];?></li>
		  <li><?php echo $row['ingredients'];?></li>
		   <li><a href="<?php echo $row['video_link'];?>">video_link</a></li>
		    <li><?php echo $row['r_description1'];?></li>
			 <li><?php echo $row['r_description2'];?></li>
			  <li><?php echo $row['r_description3'];?></li>
			  
		</ul>
	 </div>
	</div>
	<?php  } ?>
	
	
	
  </div>
 </div>
</section>

<?php

include 'footer.php';

?>
