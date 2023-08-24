 <?php
  session_start();
  $username=$_SESSION['user'];
 if(!isset($_SESSION['user']))
 {
	 ?>
	 <script>
	
	 window.location="login.php";
	 </script>
	 <?php
 }

 $con = mysqli_connect("localhost", "root", "", "foodrecipes");

 ?>
 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Indian Food Recipe</title>
	<link href="https://fonts.googleapis.com/css?family=Gotu&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	 <link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	
	
  </head>
<body>
<section id="header_top">
 <div class="container">
  <div class="row">
   <div class="col-sm-12 padding_all">
    <div class="col-sm-4 padding_all">
	 <div class="header_top_1">
	    <ul>
		          <?php if(!isset($_SESSION['user']))
 {
	 ?>
	
 <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
	 <?php
 }
 else
 {?>
         <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
	  <?php 
 }
 ?>
	
			<li><a href="registration.php">Register</a></li>
			
          <li>
            <a class="nav-link" href="catgory.php">Category</a>
          </li>
           <li>
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
		</ul>
	 </div>
	</div>
	<div class="col-sm-5">
	 <div class="header_top_2">
	  <ul>
			 <ul class="dropdown-menu drop_1">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="blog_detail.html">Blog Detail</a></li>
			</ul>
		</li>
	  </ul>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="header_top_3">
	   <div class="input-group">
		<form action="search.php" method="POST">	
	  	 	<input type="text" name="rname" class="form-control" placeholder="Search Recipe" required>
			<!-- <button class="btn btn-primary" type="button"  action="" method="GET" >
			  SEARCH</button>-->
			  <input type="submit" class="btn btn-primary" name="btn"value="SEARCH">
	   </form>
		  </div>
	 </div>
	</div>
	
   </div>
  </div>
 </div>
</section>
<section id="header">
 <nav class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
               
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
			    <ul class="nav navbar-nav navbar-center">
           
            <a class="navbar-brand" href="index.html">FOOD RECIPE</a>           

                
					<li class="active_1 clearfix"><a href="index.php">Home</a></li>
					
					<li><a href="catgory.php">Category</a>
					</li>
					<li><a href="recipeall.php">Recipe</a></li>
				
				   <li><a href="contact.php">Contact</a></li>
				 
             </ul>
            </div>
           </div>
        </div>
     
		
    </nav>
</section>