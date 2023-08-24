<?php

include 'header.php';

?>
<?php
if(isset($_POST['btnok']))
{
	// step-1 connect app with database
	$con = mysqli_connect("localhost", "root","", "foodrecipes");
	
		
		  $cat=$_POST['categ']; 
		  $im1=$_FILES['img1']['name']; 
		  $im2=$_FILES['img2']['name'];
		  $im3=$_FILES['img3']['name']; 
		  $im4=$_FILES['img4']['name']; 
		
		
   // step-2 Bulit Query            
 
 $sql ="insert into r_image values ('$cat','$im1','$im2','$im3','$im4','')";
 
        // step3 Execute Query
      $q = mysqli_query($con,$sql);
	   //step-4 work with return value query
	   if($q)
	   {
		    echo "insert data";   
		   move_uploaded_file($_FILES['img1']['tmp_name'],"upload_image/".$im1);
		   move_uploaded_file($_FILES['img2']['tmp_name'],"upload_image/".$im2);
		   move_uploaded_file($_FILES['img3']['tmp_name'],"upload_image/".$im3);
		   move_uploaded_file($_FILES['img4']['tmp_name'],"upload_image/".$im4);
           
       } 
	   else{
            echo "error not insert";
        }
          
        // Close connection
        mysqli_close($con);
}
      ?>
  

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
   sign-in page
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../material-dashboard-master/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../material-dashboard-master/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../material-dashboard-master/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-120" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-8"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-16 col-md-16 col-16 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-4 z-index-4">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-2 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Add image</h4>
                  
                </div>
              </div>
              <div class="card-body">
                <form action="#" class="text-start" method="POST"  enctype="multipart/form-data">
                 
				 				
       
					<label>Recipe Name:-</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="categ" id="categ" size="1">
					<?php


	// Establish connection with MySQL
	$con = mysqli_connect("localhost", "root", "", "foodrecipes");
	
	$qu = "SELECT * FROM `r_details`";
	
	$res = mysqli_query($con,$qu);
	
	while($row=mysqli_fetch_array($res))
	{
	
							?><option value="<?php echo $row['recipe_id']?>"><?php echo $row['recipe_name']?></option>
							<?php
	}					
	?>
				</select>	
</br>

                   
                      <label>IMAGE 1:-</label></br>
                    <input type="File" name="img1">
                 </br></br>
					
					  <label>IMAGE 2:-</label></br>
                    <input type="File" name="img2">
                 </br></br>
				   <label>IMAGE 3:-</label></br>
                    <input type="File" name="img3">
                 </br></br>
				   <label>IMAGE 4:-</label></br>
                    <input type="File" name="img4">
                 </br></br>
				 
	<!--
			 <label>Recipes image Id:-</label>&nbsp;&nbsp;</br>
                    <input type="text" name="imageid"></br></br>
        -->            
                 
                  <div class="text-center">
                    <input type="submit" name="btnok" value="Add Recipes" class="btn bg-gradient-primary w-100 my-4 mb-2">
					</input>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
   
    </div>
  </main>

</body>

</html>
<?php
  include 'footer.php';
?>