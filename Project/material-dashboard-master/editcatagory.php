<?php

include 'header.php';

?>



<?php
$c=$_REQUEST['cid'];
$con = mysqli_connect("localhost", "root", "", "foodrecipes");

$qu = "select * from category where category_id='$c'";
	
	$res = mysqli_query($con,$qu);
	while($row=mysqli_fetch_array($res))
	{
		$cid=$row['category_id'];
		$cname=$row['category_nm'];
		$imgfl=$row['category_image'];
	}
	
	
	
	

if(isset($_POST['btnok']))
{
	if(isset($_FILES['imgfl']['name']))
	{
		$im=$_FILES['imgfl']['name'];
		move_uploaded_file($_FILES['imgfl']['tmp_name'],"upload_img/".$im);
	
	}
	else{
		$im=$image;
	}
	
		if($_POST['deptsl']=="Select Department")
		{
			?>
			<script>
			alert("Select any department");
			</script>
			
			<?php
		}
}
else
{
	$cat=$_POST['categ'];
	$catetxt=$_POST['cattxt'];
	$im=$_POST['imgfl'];

	$qq="UPDATE category SET category_nm='$catetxt' ,category_image='$im' WHERE category_id='$c'";
	
	$reso = mysqli_query($con,$qq);
	if($reso)
	{
		?>
		<script>
		window.location="../material-dashboard-master/managecategory.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('not edited');
		
		</script>
		<?php
	}
}
	
	?>
<html lang="en">

<head>

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
                <form action="#" class="text-start" method="POST">
				
                  <label for="categ">CATEGORY Id:-</label>
			<select name="categ" id="categ" size="1">
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
			</select> </br>
			</br>
                    <label>CATEGORY NAME</label></br>
                    <input type="text" name="cattxt" value="<?php echo $cname ?>"></br></br>
       
                  
                    <label>IMAGE</label></br>
                    <input type="File" name="imgfl" value="<?php echo $row['category_image'];?>" > </br></br>
                 
                  <div class="text-center">
                    <input type="submit" name="btnok" value="Edit Category" class="btn bg-gradient-primary w-100 my-4 mb-2">
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