<?php

include 'header.php';

?>
 <?php

	// Establish connection with MySQL
	$con = mysqli_connect("localhost", "root", "", "foodrecipes");
		$id=$_REQUEST['rid'];
	$qu = "SELECT * from  r_details where  recipe_id='$id'";
	$res = mysqli_query($con,$qu);
	while($row=mysqli_fetch_array($res))
	{
		   
	?>
	<?php 
	 $q="select * from r_image where recipe_id ='$id'";
	 $rss=mysqli_query($con,$q);
	 while($roww=mysqli_fetch_array($rss))
	 {
	
	?>	
<section id="blog" class="blog_detail clearfix">
 <div class="container">
  <div class="row">
    <div class="blog_d1 clearfix">
	<div class="recipe_1 clearfix">
     <div class="col-sm-12">
	   <h1>RECIPE DETAIL OF <?php echo $row['recipe_name'];?> </h1>
	 </div>
   </div>
	  <div class="col-sm-12">
	  <img src="../material-dashboard-master/upload_image/<?php echo $roww['image_1']; ?>" class="iw"  style="margin-top:20px;" alt="img17">
	
	  <div class="blog_3">
	  <h4><?php echo $row['recipe_name'];?></h4>
	   
	   </div>
	 </div>
	</div>
	
    <h4><?php echo $row['recipe_name'];?></h4>
	<div class="blog_d2 clearfix">
	 <div class="col-sm-12">
       <ul>
	    <img src="../material-dashboard-master/upload_image/<?php echo $roww['image_2']; ?>" height="400" width="500"/>
		 <li><?php echo $row['recipe_name'];?></li>
		
		  <li><?php echo $row['ingredients'];?></li>
		  <!-- <li><a href="">video_link</a></li>-->
		  <li>
			  
		  <iframe width="560" height="315" src=" <?php echo $row['video_link'];?> " frameborder="0" allowfullscreen></iframe></li>
		  
		    
		  <!--<?php echo $row['video_link'];?>-->
		   <img src="../material-dashboard-master/upload_image/<?php echo $roww['image_3']; ?>" height="400" width="500"/>
		    <li><?php echo $row['r_description1'];?></li>
			 <li><?php echo $row['r_description2'];?></li>
			 
		    <img src="../material-dashboard-master/upload_image/<?php echo $roww['image_4']; ?>" height="400" width="500"/>
			  <li><?php echo $row['r_description3'];?></li>
			  <br>
			 
<!---->

<!-- comment -->
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

   <FORM ACTION="#" METHOD="POST">

   
 
   <div class="col-sm-12 padding_all">
    <div class="clearfix con_las">
		<h3>Comment Here</h3>
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
  <div class="contact_7"> 
  <label name="meesage" > Enter your Message</label> <textarea  type="text"  name="meesage" placeholder="Enter a Message"  class="text1"  rows="5" cols="30" ></textarea></div>
	</div>
	</div> 
	
			   <div class="clearfix con_las">
	<div class="col-sm-4 padding_left_1">

  <input type="submit"  name="cbtn"  class="button button2"> 
 
	</div>
	</div> 
	
	
	  </FORM>


<!-- rating -->
<div class="clearfix con_las">
	

			 <div id="rating_div"> 
				<div class="star-rating">
				&nbsp;&nbsp;&nbsp; 
					<span class="fa divya fa-star-o" data-rating="1" onclick="rating1()" ondblclick="rating01()" id="1"style="font-size:20px;"></span>
					<span class="fa fa-star-o" data-rating="2"       onclick="rating2()" id="2" style="font-size:20px;"></span>
					<span class="fa fa-star-o" data-rating="3"       onclick="rating3()" id="3" style="font-size:20px;"></span>
					<span class="fa fa-star-o" data-rating="4"        onclick="rating4()" id="4" style="font-size:20px;"></span>
					<span class="fa fa-star-o" data-rating="5"        onclick="rating5()" id="5" style="font-size:20px;"></span>
					<input type="hidden" name="whatever3" class="rating-value" value="1">
				</div>
				<div class="col-md-4">
					<form action="" method="POST">	
					<br><input type="text" class="text1"  name="email" id="email" placeholder="Email Id"><br>
						<input type="text" name="trating" id="ratingt"  values="" style="display:none">
						<p id="new"></p>
						<p><button  class="button button2" name="rsubmit" id="srr_rating">Submit</button></p>
						<label> <?php 
	$sql = "SELECT  AVG(stars) FROM r_rating where recipe_id='$id'";
$result = $con->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo "Average rating :". $row['AVG(stars)'];
      echo "<br />";
}

						?>
						
						</label>
				 </form>
				</div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="js/index.js"></script>
			<script>
				let  count=0;

				function rating01()
				{
					document.getElementById("1").style.backgroundColor = "white";
					document.getElementById("2").style.backgroundColor = "white";
					document.getElementById("3").style.backgroundColor = "white";
					document.getElementById("4").style.backgroundColor = "white";
					document.getElementById("5").style.backgroundColor = "white";
					count=0;
				}
				function rating1()
				 {
					document.getElementById("1").style.backgroundColor = "#FF8080";

					document.getElementById("2").style.backgroundColor = "white";
					document.getElementById("3").style.backgroundColor = "white";
					document.getElementById("4").style.backgroundColor = "white";
					document.getElementById("5").style.backgroundColor = "white";
					count=1;
					//alert("count"+count);
					document.getElementById("new").innerHTML="Rating "+count;
					document.getElementById("ratingt").value=""+count;
				 }
				 function rating2()
				 {
					document.getElementById("1").style.backgroundColor = "#FF8080";
					document.getElementById("2").style.backgroundColor = "#FF8080";
					
					document.getElementById("3").style.backgroundColor = "white";
					document.getElementById("4").style.backgroundColor = "white";
					document.getElementById("5").style.backgroundColor = "white";
					count=2;
					//alert("count"+count);
					document.getElementById("new").innerHTML="Rating "+count;
					document.getElementById("ratingt").value=""+count;
				 }
				 function rating3()
				 {
					document.getElementById("1").style.backgroundColor = "#FF8080";
					document.getElementById("2").style.backgroundColor = "#FF8080";
					document.getElementById("3").style.backgroundColor = "#FF8080";
					document.getElementById("4").style.backgroundColor = "white";
					document.getElementById("5").style.backgroundColor = "white";
					count=3;
					//alert("count"+count);
					document.getElementById("new").innerHTML="Rating "+count;
					document.getElementById("ratingt").value=""+count;
				 }
				 function rating4()
				 {
					document.getElementById("1").style.backgroundColor = "#FF8080";
					document.getElementById("2").style.backgroundColor = "#FF8080";
					document.getElementById("3").style.backgroundColor = "#FF8080";
					document.getElementById("4").style.backgroundColor = "#FF8080";
					document.getElementById("5").style.backgroundColor = "white";
					count=4;
					//alert("count"+count);
					document.getElementById("new").innerHTML="Rating "+count;
					document.getElementById("ratingt").value=""+count;
				 }
				 function rating5()
				 {
					document.getElementById("1").style.backgroundColor = "#FF8080";
					document.getElementById("2").style.backgroundColor = "#FF8080";
					document.getElementById("3").style.backgroundColor = "#FF8080";
					document.getElementById("4").style.backgroundColor = "#FF8080";
					document.getElementById("5").style.backgroundColor = "#FF8080";
					count=5;
					//alert("count"+count);
					document.getElementById("new").innerHTML="Rating "+count;
					document.getElementById("ratingt").value=""+count;
				 }
			</script>
	</div>  
	</div>
	
		</ul>
	 </div>
	</div>
	 <?php } } ?>
	
	
	
  </div>
 </div>
</section>
<!--comment-->
<?php

if(isset($_POST['cbtn']))
{
	$ud=0;
	$com=$_REQUEST['meesage'];
	$ema=$_REQUEST['emil'];
	if($ema!=null)
	{
		$date = date('d-m-y h:i:s');
		$q="select user_id from registration where email ='$ema'";
	 	$r=mysqli_query($con,$q);
		$raw=mysqli_num_rows($r);
		if($raw>0)
		{
	 		while($row=mysqli_fetch_row($r))
	 		{
				 $ud=$row[0];
	 		}

	 		$qur1="select * from comment where user_id='$ud' and recipe_id='$id'";
	 		$r=mysqli_query($con,$qur1);
	 		$rw=mysqli_num_rows($r);
	 		if($rw>0)
	 		{
				 ?>
			 	<script>
			 		alert("You have already given a rating for this recipe");
				</script>
		   		<?php		
			}
	 		else 
	 		{
	 			$qur2="insert into comment values('$ud','$id','$com','$date')";
	 			$r=mysqli_query($con,$qur2);
	 		}
		}
		else
		{
			?>
			<script>
				alert("please enter valid email id");
		   </script>
			  <?php
		}
	}	
	else
	{
		?>
		<script>
				alert("please enter email id");	
		</script>
		<?php
	}
}		
?>






<?php

if(isset($_POST['rsubmit']))
{
	$uid=0;
	$rating=$_REQUEST['trating'];
	$em=$_REQUEST['email'];
	if($em!=null)
	{
		$date = date('d-m-y h:i:s');
		$q="select user_id from registration where email ='$em'";
	 	$r=mysqli_query($con,$q);
		$raw=mysqli_num_rows($r);
		if($raw>0)
		{
	 		while($row=mysqli_fetch_row($r))
	 		{
				 $uid=$row[0];
	 		}

	 		$qur1="select * from r_rating where user_id='$uid' and recipe_id='$id'";
	 		$r=mysqli_query($con,$qur1);
	 		$rw=mysqli_num_rows($r);
	 		if($rw>0)
	 		{
				 ?>
			 	<script>
			 		alert("You have already given a rating for this recipe");
				</script>
		   		<?php		
			}
	 		else 
	 		{
	 			$qur2="insert into r_rating values('$uid','$id','$date','$rating')";
	 			$r=mysqli_query($con,$qur2);
	 		}
		}
		else
		{
			?>
			<script>
				alert("please enter valid email id");
		   </script>
			  <?php
		}
	}	
	else
	{
		?>
		<script>
				alert("please enter email id");	
		</script>
		<?php
	}
}		
?>
<?php

include 'footer.php';

?>