<?php

include 'header.php';

?>
<!-- End Navbar -->
 <!--   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">temp</p>
                <h4 class="mb-0">temp</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">temp</span>temp</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">temp</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">temp</p>
                <h4 class="mb-0">temp,temp</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">temp </span>temp</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">temp</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">temp</p>
                <h4 class="mb-0">temp,temp</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">temp</span>temp</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">temp</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">temp</p>
                <h4 class="mb-0">temp,temp</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">temp</span>temp</p>
            </div>
          </div>
        </div>
      </div>
   
       
      </div>
 -->
	  <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h1 class="text-white text-capitalize ps-3"> Manage Image </h1>
              </div>
            </div>
			<h4 style="text-align:right;"> <a href="../material-dashboard-master/addrecipe_images.php" >Add New Image</a></h4>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Recipe id</th>
                     <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Image 1</th>
                     <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image 2</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image 3</th>
			 <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image 4</th>
						 <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Recipe image id </th>
						  		
					<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">edit</th>
			<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
			
                    </tr>
                  </thead>
 <tbody>
 <?php
$r_id=$_GET['iid'];
	// Establish connection with MySQL
	$con = mysqli_connect("localhost", "root", "", "foodrecipes");
	
	$qu = "select * from r_image where recipe_id=$r_id";
	
	$res = mysqli_query($con,$qu);
	
	while($row=mysqli_fetch_array($res))
	{
		   ?> 
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                         
                            <h6><?php echo $row['recipe_id'];?></h6>


                        </div>
                      </td>
                      <td >
                         <img src="upload_image/<?php echo $row['image_1'];?>" height=100 width=100/>  
                   
                      </td>
                      <td>
                <img src="upload_image/<?php echo $row['image_2'];?>" height=100 width=100/>  
                      </td>

                         <td class="align-middle text-center">
                     
					 <img src="upload_image/<?php echo $row['image_3'];?>" height=100 width=100/>  
                      </td>  
					  
					  <td class="align-middle text-center">
                        
						<img src="upload_image/<?php echo $row['image_4'];?>" height=100 width=100/>  
                      </td>  
					  
					  <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $row['recipe_image_id'];?></SPAN>
                      </td>
					  </td>  <td class="align-middle text-center">
                        <a href="../material-dashboard-master/editrecpiesimage.php?rid=<?php echo $row['recipe_image_id']; ?> ">Edit</a>
                      </td>
					  					  </td>  <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><a href="../material-dashboard-master/imagedelete.php?rid=<?php echo $row['recipe_id']; ?> ">Delete</SPAN>
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