<?php

include 'header.php';

?>


<section id="blog">
 <div class="container">
 
 <?php
 $sr = $_POST['rname'];
 $con = mysqli_connect("localhost", "root", "", "foodrecipes");
 $q="select * from r_details where recipe_name like '%$sr%'";
 $rs=mysqli_query($con,$q);
 while($row=mysqli_fetch_array($rs))
 {
	?> 
		 
				
					<?php 
	 $q="select * from r_image where recipe_id = $row[recipe_id]";
	 $rss=mysqli_query($con,$q);
	 while($roww=mysqli_fetch_array($rss))
	 {
	
	?>	
	<br>
	
   <div class="col-sm-12">
    <div class="col-sm-6">
	 <div class="blog_2">
	 <div class="grid">
						
		
						<img src="../material-dashboard-master/upload_image/<?php echo $roww['image_1']; ?>" height="300" width="300"/>
						
						
								
		<br>
		  
		<?php
	 }
	?>	
	  </div>
	  </div>
	</div>
	<div class="col-sm-6">
	 <div class="blog_3">
	  <h4 class="text-center"><?php echo $row['recipe_name']; ?> </h4>
<br>
	   <p class="text-center"><a href="alldetails.php?rid=<?php echo $row['recipe_id']; ?>">READ MORE</a></p>
	   <br>
	 </div>
	</div>
   </div>
  
 
	<br>
	
	
	
	
	 
	<?php 
 }
 ?>
  
	
   </div>
  
  </div>
  </div>
</section>
<?php
include 'footer.php';
?>