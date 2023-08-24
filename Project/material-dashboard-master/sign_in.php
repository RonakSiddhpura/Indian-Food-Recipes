<?php
session_start();
$con=mysqli_connect("localhost","root","","foodrecipes");
if(isset($_POST["btnok"]))
{	
$usernam=$_POST["user"];
$pswd=$_POST["pswdtxt"];
$q="select * from admin WHERE username='$usernam' AND password='$pswd' ";
$c=mysqli_query($con,$q);
$r=mysqli_num_rows($c);
if($r==0)
{
	?>
			<script>
					alert('Invalid Username & Password');
			</script>
<?php				
}
else {
	$_SESSION['admin']=$usernam;
	while($row=mysqli_fetch_array($c))
	{
		$_SESSION['usernam']=$usernam;
	}
	?>
	<script>
			window.location="../material-dashboard-master/index.php";
	</script>
			<?php
}
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
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Admin Sign in</h4>
                  
                </div>
              </div>
              <div class="card-body">
                <form action="#" class="text-start" method="POST" >
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input  name="user" type="text"  class="form-control" >
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="pswdtxt" class="form-control">
                  </div>
                  
                  <div class="text-center">
                    <input type="submit" name="btnok" value="sign in" class="btn bg-gradient-primary w-100 my-4 mb-2">
					</input>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                 © 2021-2022 
                made with  &nbsp;<i class="fa fa-heart"></i> AVPTI <i class="fa fa-heart"></i>&nbsp;  by&nbsp; 
              Bhavya&nbsp;,&nbsp;Meet&nbsp;,&nbsp;Ronak&nbsp;,&nbsp;Bhavin
              </div>
            </div>
       
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../material-dashboard-master/assets/js/core/popper.min.js"></script>
  <script src="../material-dashboard-master/assets/js/core/bootstrap.min.js"></script>
  <script src="../material-dashboard-master/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../material-dashboard-master/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../material-dashboard-master/assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>
</html>