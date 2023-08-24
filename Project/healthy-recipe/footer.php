<section id="store">
 <div class="container">
  <div class="row">
   <div class="store_main clearfix">
    
     <div class="col-sm-12">
	<div class="col-sm-3">
	 <div class="store_2">
	 <h5 class="footer-title-29">Quick Links</h5>

	
	 
	 <?php if(!isset($_SESSION['user']))
 {
	 ?>
	

	<li><a  href="signin.php" >Login</a></li>
          </li>
	 <?php
 }
 else
 {?>
        
        <li>    <a  href="logout.php" >Logout</a></li>
      
	  <?php 
 }
 ?>
	
	<li><a href="registration.php" >Register</a></li>
	<li><a href="catgory.php"   >Category</a></li>
	<li><a href="contact.php">Contact</a></li>   

</div>
	</div>

	 <div class="col-sm-3">
	 <div class="store_2">
	 
	  <h5 class="footer-title-29">Get to Know Us</h5>
                      <li><a href="index.php">Home</a></li>
                      <li><a href="feedback.php">feedback</a></li>
   </div>
	</div>
	
	 <div class="col-sm-3">
	 <div class="store_2">
	
	 <h5>Category</h5>
	  <?php

	// Establish connection with MySQL
	$con = mysqli_connect("localhost", "root", "", "foodrecipes");
	
	$qu = "Select * from category";
	
	$res = mysqli_query($con,$qu);
	

	while($row=mysqli_fetch_array($res))
	{
		   ?>  
                
                 
                  <li><a href="recipe.php?id=<?php echo $row['category_id']; ?>"> <?php echo $row['category_nm'];?></a></li>
     
                           
                     
                      
                
	<?php
	}	
?>
                     
                    
                      
	  
	
</div>
</div>
	<div class="col-sm-3">
	 <div class="store_2">
	 <h5>Address</h5>
	<ul>
 <li><p><span class="fa fa-map-marker"></span>Tagore Road,Opp. Hemu Gadhavi Hall, Rajkot,Gujarat.</p></li>
 <li><a href="tel:+91-98989-89898"><span class="fa fa-phone"></span> +91-98989-89898</a></li>
                      <li><a href="mailto:IndianFoodRecipe@gmail.com" class="mail"><span class="fa fa-envelope-open-o"></span> IndianFoodRecipe@gmail.com</a></li>
</ul>	 
	</div>
	</div>


   </div>
   </div>



   <div class="col-sm-12">
    <div class="store_3">© 2021-2022 
                made with  &nbsp;<i class="fa fa-heart"></i> AVPTI <i class="fa fa-heart"></i>&nbsp;  by&nbsp; 
              Bhavya&nbsp;,&nbsp;Meet&nbsp;,&nbsp;Ronak&nbsp;,&nbsp;Bhavin</div>
   </div>
  </div>

  
<script>
	$(document).ready(function() {
    $('#myCarousel').carousel({
	    interval: 10000
	})
});
	</script>
</body>
</html>