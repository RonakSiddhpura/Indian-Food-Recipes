<?php

include 'header.php';

?>
  <?php

	// Establish connection with MySQL
	$con = mysqli_connect("localhost", "root", "", "foodrecipes");
	
	$qu1 = "Select * from category";
	$qu2 = "Select * from r_details ";
	$qu3 ="SELECT * FROM registration ";
	$qu4 ="SELECT * FROM feedback";
	$res = mysqli_query($con,$qu1);
	$cat=mysqli_num_rows($res);
	
	$res = mysqli_query($con,$qu2);
	$res=mysqli_num_rows($res);
	
	$user = mysqli_query($con,$qu3);
	$user1=mysqli_num_rows($user);
	
	$feedback = mysqli_query($con,$qu4);
	$feed=mysqli_num_rows($feedback);
	?>
 <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
<span class="material-icons-outlined">             
			 <i class="material-icons opacity-10">category</i>
	
</span>
              </div>
              <div class="text-end pt-1">
                <h4 class="mb-0">Category</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <h4><?php echo $cat; ?></h4>
            </div>
          </div>
        </div>
		
		
		
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
			  <span class="material-icons-outlined">             
			 <i class="material-icons opacity-10"> restaurant</i>
	
</span>
               
              </div>
              <div class="text-end pt-1">
                <h4 class="mb-0">Recipe</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <h4><?php echo $res; ?></h4>
            </div>
          </div>
        </div>
        
		
		<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
               	  <span class="material-icons-outlined">             
			 <i class="material-icons opacity-10"> account_circle</i>
	
</span>
              </div>
              <div class="text-end pt-1">
             
                <h4 class="mb-0">Users</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <h4><?php echo $user1; ?></h4>
            </div>
          </div>
        </div>
       


	   <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                     	  <span class="material-icons-outlined">             
			 <i class="material-icons opacity-10"> feedback</i>
	
</span>
              </div>
              <div class="text-end pt-1">
             
                <h4 class="mb-0">Feedback</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <h4><?php echo $feed; ?></h4>
            </div>
          </div>
        </div>
      </div>
   
       
      </div>
      <div class="row mb-4" width="60%">
    
          <div class="card" align="center" width="60%">
            <div class="card-header pb-0" width="60%">
              <div class="row"  width="60%">
                <div class="col-lg-6 col-7" width="60%">
                  <h2>Welcome <br/> to <br/>admin panel<br/><br/><br/></h2>
                </div>
               
              </div>
            </div>
            
          </div>
       
       
      </div>
	
<?php
  include 'footer.php';
?>