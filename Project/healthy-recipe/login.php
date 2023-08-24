<?php
session_start();
$con=mysqli_connect("localhost","root","","foodrecipes");
if(isset($_POST["btnok"]))
{	
$usernam=$_POST["mail"];
$pswd=$_POST["pswdtxt"];
$q="select * from registration WHERE email='$usernam' AND password='$pswd' ";
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
	$_SESSION['user']=$usernam;
while($row=mysqli_fetch_array($c))
	{
		$_SESSION['usernam']=$usernam;
	}
	?>
	<script>
			window.location="../farm_planning-starter/index.php";
	</script>
			<?php
}
}
?>

<div class="contact-form section-gap pt-5" id="contact">
     <div class="container py-lg-5 py-md-4">
         
         
         <div class="contacts12-main mb-5">
             <form action="#" method="post">
                 <div class="main-input">
                    
                     <div class="d-grid">
                         <input   name="mail" type="email"   placeholder="Enter your Email id" class="contact-input" required="">
						  </div>
						 <div class="d-grid">
                         <input type="password" name="pswdtxt"  placeholder="Enter your  Password" class="contact-input" required="">
                     </div>
                 </div>
               <!--  <textarea class="contact-textarea" name="w3lMessage" id="w3lMessage" placeholder="Type your message here" required=""></textarea>-->
                 <div class="text-left">
                     <button type="submit" name="btnok" value="Login" class="btn btn-secondary btn-theme2">login</button>
                 </div>
             </form>
         </div>
