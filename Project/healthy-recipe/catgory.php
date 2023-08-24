<?php

include 'header.php';

?>

<section id="blog">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="blog_1"><h3 class="text-center">Category</h3></div>
   </div>
 <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th><h1>Category Name</h1></th>
                      <th><h1>Category Image</h1></th>
                 <th><h1>Show Recipes</h1></th>
			
                    </tr>
                  </thead>
 <tbody>
 <?php

	// Establish connection with MySQL
	$con = mysqli_connect("localhost", "root", "", "foodrecipes");
	
	$qu = "Select * from category";
	
	$res = mysqli_query($con,$qu);
	
	
	
	while($row=mysqli_fetch_array($res))
	{
		   ?> 
                  <tr>
                
                   <td>
                        <p><h2><?php echo $row['category_nm'];?></h2></p>
                   
                      </td>
                      <td>
                 <div class="col-sm-12">
    <div class="col-sm-6">
	 <div class="blog_2"><div class="grid">
					
					
						<img src="../material-dashboard-master/upload_image/<?php echo $row['category_image'];?>"  height="200" width="300"/>
								
		
	  </div></div>
	</div>
						
					
                          
                          
                      </td>
                   <td>
     
                           <a href="recipe.php?id=<?php echo $row['category_id']; ?>"><h2>Show Recipes</h2></a></p>
                         
                      </td>
                      
                </tr>
	<?php
	}	
?>
			</tbody>
                </table>
	  
	
	
 
 
  
  </div>
 </div>
</section>

<?php

include 'footer.php';

?>