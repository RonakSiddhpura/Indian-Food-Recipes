<?php


$con=mysqli_connect("localhost","root","","foodrecipes");


if(isset($_POST["btnok"]))
{	
 $mail=$_POST["emil"];
 $sub=$_POST["subject"];
 $msg=$_POST["meesage"];
 $fd=date("d/m/Y");

				$q="INSERT INTO feedback VALUES ('','$mail','$sub','$msg','$fd')";
				$c=mysqli_query($con,$q);
			
			

if($c)
{
	?>
					<script>
								alert('successfully sending feedback');
						</script>
	<?php
}
	else
{
	?>
					<script>
								alert('error sending feedback');
						</script>
	<?php
}

}
		
?>


<?php

include 'header.php';

?>
<style>
.button {
  border: none;
  color: white;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 6px 3px;
  cursor: pointer;
}


.button2 {background-color:#FF8080 ;}
.text1 {background-color:#f3e5e5; 
    border: 1px solid #ccc;
    border-radius: 4px;
	border: 1px dotted #f69797;}
</style>
<section id="contact">


 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="col-sm-4">
	 <div class="contact_2">
	   <i class="fa fa-home"></i>
	   <h4>Add:  <span class="main_1"><span class="fa fa-address"></span> Tagore Road,Opp. Hemu Gadhavi Hall, Rajkot,Gujarat.</li> </span></h4>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="contact_2">
	   <i class="fa fa-phone"></i>
	   <h4>Phone: <span class="main_1"> <li><a href="tel:+91-98989-89898"><span class="fa fa-phone"></span> +91-98989-89898</a></li></span></h4>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="contact_2">
	   <i class="fa fa-envelope"></i>
	   <h4>E-mail:<span class="main_2"><li><a href="mailto:IndianFoodRecipe@gmail.com" class="mail"><span class="fa fa-envelope-open-o"></span> IndianFoodRecipe@gmail.com</a></span> </h4>
	 </div>
	</div>
   </div>
   </div>
   <FORM ACTION="#" METHOD="POST">

   
 
   <div class="col-sm-12 padding_all">
    <div class="clearfix con_las">
		<h3>FEEDBACK FORM</h3>
		</div>
		  </div>
		   <div class="clearfix con_las">
    <div class="col-sm-4 padding_left_1">
	 <div class="contact_7"><label name="email" > Enter your email</label><input type="email" name="emil" placeholder="Your  Email id" class="form-control" required></div>
	</div>
	</div>
	<br>
   		   <div class="clearfix con_las">
  <div class="col-sm-4 padding_left_1">
	 <div class="contact_7"><label name="email" > Enter your Subject</label><input type="text" name="subject" placeholder="Enter the Subject" class="form-control" required></div>
	</div>
	</div>
	
			   <div class="clearfix con_las">
	<div class="col-sm-4 padding_left_1">
  <div class="contact_7"> 
  <label name="email" > Enter your Message</label> <textarea  type="text"  name="meesage" placeholder="Enter a Message"  class="text1"  rows="5" cols="30" ></textarea></div>
	</div>
	</div> 
	
			   <div class="clearfix con_las">
	<div class="col-sm-4 padding_left_1">

  <input type="submit"  name="btnok"  class="button button2"> 
 
	</div>
	</div> 
	
	
	  </FORM>

  
  </div>
 </div>
</section>

<?php

include 'footer.php';

?>