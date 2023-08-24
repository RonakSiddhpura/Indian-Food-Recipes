<?php

include 'header.php';

?>
<!-- End Navbar -->
  <!--  <div class="container-fluid py-4">
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
                <h3 class="text-white text-capitalize ps-3"> Manage Feedback </h3>
              </div>
            </div>
			
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subject</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Message</th>
			  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
						   		
					
			 <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
			
                    </tr>
                  </thead>
 <tbody>
         <?php

	// Establish connection with MySQL
	$con = mysqli_connect("localhost", "root", "", "foodrecipes");
	
	$qu = "Select * from feedback";
	
	$res = mysqli_query($con,$qu);
	
	
	
	while($row=mysqli_fetch_array($res))
	{
		   ?>  
          <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row['user_id']?></h6>

                          </div>
                        </div>
                      </td>
                    
                      <td class="align-middle text-center ">
                  <p class="text-xs font-weight-bold mb-0"><?php echo $row['email']?></p>
				 
                      </td>

                         <td class="align-middle text-center ">
                      <p class="text-xs font-weight-bold mb-0"><?php echo $row['subject']?></p>
					  
                      </td>  
					  
					  <td class="align-middle text-center">
                               <p class="text-xs font-weight-bold mb-0"><?php echo $row['message']?></p>
                      </td>  
					  
					  <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $row['f_date']?> </SPAN>
                      </td>
					 
					  
					 
					  					 <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><a href="feedbackdelete.php?id=<?php echo $row['user_id'];?>& mail=<?php echo $row['email'];?>" >Delete</a></SPAN>
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