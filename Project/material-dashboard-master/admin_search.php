<?php

include 'header.php';

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
			<h4> <a href="addrecipe.php" style="float:right">Add New Recipe</a></h4>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Recipe id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Recipe Name</th>
           
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">video link</th>
			  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">View</th>
				  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">View</th>
				  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
				  
                    </tr>
                  </thead>
 <tbody>
  <?php

	// Establish connection with MySQL
	$con = mysqli_connect("localhost", "root", "", "foodrecipes");

  
    $sch=$_POST['adsearch'];
	$qu = "SELECT `recipe_id`, `recipe_name`, `video_link` FROM `r_details` WHERE `recipe_name` like '%$sch%' ";
	
	$res = mysqli_query($con,$qu);
	
	
	
	while($row=mysqli_fetch_array($res))
	{
		   ?> 
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row['recipe_id'] ?></h6>

                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $row['recipe_name']?></p>
                      </td>
                      
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">  <a href="<?php echo $row['video_link']?>"  target="_blank" ><?php echo $row['video_link']?></span>
                      </td>
                        <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">  <a href="../material-dashboard-master/more.php?rid=<?php echo $row['recipe_id'];?> ">More</a></span>&nbsp;|
                <span class="text-secondary text-xs font-weight-bold">  <a href="../material-dashboard-master/recipeimage.php?iid=<?php echo $row['recipe_id'];?> ">Image</a></span>
                      </td> 
					  
					  <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">  <a href="../material-dashboard-master/comment.php?caid=<?php echo $row['recipe_id'];?> " >Comment</a></span>&nbsp;|
                <span class="text-secondary text-xs font-weight-bold">  <a href="../material-dashboard-master/rating.php?raid=<?php echo $row['recipe_id'];?>" >Rating</a></span>
                      </td>
					  
					  <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">  <a href="../material-dashboard-master/editmanagerecpies.php?rid=<?php echo $row['recipe_id']; ?>" >Edit</a></span>&nbsp;|
                <span class="text-secondary text-xs font-weight-bold">  <a href="../material-dashboard-master/recipedelete.php?id=<?php echo $row['recipe_id']; ?>" >Delete</a></span>
                      </td>
					  
                    </tr>

          	<?php
	}	
?>  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
     
    </div>

<?php
  include 'footer.php';
?>