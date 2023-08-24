<?php
  session_start();
  $admin=$_SESSION['admin'];
 if(!isset($_SESSION['admin']))
 {
	 ?>
	 <script>
	 alert('you have to login first');
	 window.location="sign_in.php";
	 </script>
	 <?php
 }

 $con = mysqli_connect("localhost", "root", "", "foodrecipes");

 ?>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    welcome to admin panel
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">

    
      <a class="navbar-brand m-0"  target="_blank">
       <i class="fa fa-cutlery" ></i>
        <span class="ms-1 font-weight-bold text-white">Indian Food Recipies</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
   
      <ul class="navbar-nav">
        
  
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php" >
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fa fa-home" ></i>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>
		

	
       
		
		 <li class="nav-item">
          <a class="nav-link text-white " href="managecategory.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-cogs" ></i>
            </div>
            <span class="nav-link-text ms-1">Manage category</span>
          </a>
        </li>
		  <li class="nav-item">
          <a class="nav-link text-white " href="managerecipe.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="fa fa-cutlery" ></i>
            </div>
            <span class="nav-link-text ms-1">Manage recipe</span>
          </a>
        </li>
		
<!--
		<li class="nav-item">
          <a class="nav-link text-white " href="recipeimage.php">
            
			<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
		<i class="fa fa-picture-o" ></i>
            </div>
            <span class="nav-link-text ms-1">Recipe Images</span>
          </a>
        </li>
		
-->
		<li class="nav-item">
          <a class="nav-link text-white " href="user.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
           <i class="fa fa-users" ></i>
            </div>
            <span class="nav-link-text ms-1">Manage user</span>
          </a>
        </li>
		
		

		 <li class="nav-item">
          <a class="nav-link text-white " href="feedback.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
			<i class="fa fa-reply" ></i>
            </div>
            <span class="nav-link-text ms-1">Replay feed back</span>
          </a>
        </li>
<!--		
		 <li class="nav-item">
          <a class="nav-link text-white " href="comment.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
			<i class="fa fa-commenting" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">COMMENT</span>
          </a>
        </li>
			 <li class="nav-item">
          <a class="nav-link text-white " href="rating.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
			<i class="fa fa-star" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">View Rating</span>
          </a>
        </li>
-->

        <li class="nav-item">
          <a class="nav-link text-white " href="logout.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
             <i class="fa fa-sign-out" ></i>
            </div>
            <span class="nav-link-text ms-1">Log out</span>
          </a>
        </li>
		
		     
	</ul>
  
  
  </aside>
   <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
     
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <b><h3><?php echo $admin ?></h3></b>
		  
		  
		   <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
             
              </div>
          </div>
                    
		  <!-- <div class="ms-md-auto pe-md-3 d-flex align-items-center">
       <form action="admin_search.php" method="POST">	
	   
               <div class="input-group input-group-outline">
                  <label class="form-label">search here...</label>
                  <input type="text" name="adsearch" class="form-control">
                  <br>
                  &nbsp;&nbsp;&nbsp;<input type="submit"  style="background-color:#e91e63; border=none; border-radius:5px; color:#fff;" value="submit" name="rsubmit" id="srr_recipe">
            </form>
            </div>
          </div>-->

          <div class="col-sm-3">
	          <div class="header_top_3">
	          <div class="input-group">
		        <form action="admin_search.php" method="POST">	
	  	 	    <input type="text"  style="border:2px solid black; border-radius:5px;" name="adsearch" class="form-control" placeholder="Search Recipe" required>
			      <input type="submit" class="btn btn-primary" name="btn"value="SEARCH">
	   </form>
		  </div>
	 </div>
	</div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"><a href="logout.php">Logout</a></span>
              </a>
            </li>
         
          </ul>
        </div>
      </div>
      </div>
    </nav>

