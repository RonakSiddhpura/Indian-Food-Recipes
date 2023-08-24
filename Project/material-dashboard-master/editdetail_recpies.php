<?php

include 'header.php';

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
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Edit Category</h4>
                  
                </div>
              </div>
              <div class="card-body">
                <form action="#" class="text-start" method="POST" >
                 
                    <label>Recipes Ingredients:-</label>&nbsp;&nbsp;
                    <input type="text" name="ngredients"></br></br>
       
                  <label>Recipes Description1:-</label>
                    <input type="text" name="Description1"></br></br>
					
					<label>Recipes Description2:-</label>
                    <input type="text" name="Description2"></br></br>
					
					
					<label>Recipes Description3:-</label>
                    <input type="text" name="Description3"></br></br>
					
         <label>Category Id:-</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="Description3"></br></br>
                 
                  <div class="text-center">
                    <input type="submit" name="btnok" value="Edit Recipes" class="btn bg-gradient-primary w-100 my-4 mb-2">
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