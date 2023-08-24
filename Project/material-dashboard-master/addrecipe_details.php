<?php
include 'header.php';
?>

<?php
if(isset($_POST['btnok']))
{
	// step-1 connect app with database
	$con = mysqli_connect("localhost", "root", "", "foodrecipes");
	 $ingre =  $_POST['ingredient'];
        $Descri1 = $_POST['Description1'];
        $Descri2 =  $_POST['Description2'];
        $Descri3 = $_POST['Description3'];
        $cate = $_POST['categ'];
   // step-2 Bulit Query            
 
 $sql = "INSERT INTO r_details  (ingredients, r_description1,r_description2,r_description3, category_id) VALUES ('$ingre','$Descri1','$Descri2','$Descri3','$cate')";
      
        // step3 Execute Query
      $q= mysqli_query($con, $sql);
	   //step-4 work with return value query
	   if($q)
	   {
            echo "insert data";   
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
    <div class="page-header align-items-start min-vh-80" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-16 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-2 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Add Category</h4>
                  
                </div>
              </div>
              <div class="card-body">
                <form action="#" class="text-start" method="POST" >
                 
                    <label>Recipes Ingredients:-</label>&nbsp;&nbsp;
                    <input type="textarea" rows="2" cols="3"name="ingredient" placeholder="Ingredients"/></br></br>
       
                  <label>Recipes Description1:-</label>
                    <input type="textarea" rows="2" cols="3"name="Description1" placeholder="Description1"/></br></br>
					
					<label>Recipes Description2:-</label>
                    <input type="textarea" rows="2" cols="3" name="Description2" placeholder="Description2"/></br></br>
					
					
					<label>Recipes Description3:-</label>
                    <input type="textarea" rows="2" cols="3" name="Description3" placeholder="Description3"/></br></br>
					<textarea rows = "5" cols = "50" name = "description">
            Enter your name
         </textarea>
					<label>Category Id:-</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="categ" id="categ" size="1">
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
					</select></br></br>
                 
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