<?php

session_start();

 
$con=mysqli_connect("localhost","root","","foodrecipes");


if(isset($_POST["btnok"]))
{	
 $mail=$_POST["email"];
 $usernam=$_POST["username"];
 $pswd=$_POST["pswdtxt"];
 $cpswd=$_POST["cpswdtxt"];

		if($cpswd==$pswd)
			{
				$q="INSERT INTO `registration`(`full name`, `user_id`, `email`, `password`) VALUES ('$usernam','','$mail','$pswd') ";
				$c=mysqli_query($con,$q);
				
						
					?>
						<script>
								window.location="../healthy-recipe/signin.php";
						</script>
					<?php
			}

		else
		{
			?>
						<script>
								alert(' password do not match');
						</script>
			<?php	
		}

}
		
?>

<html>
<!-- Head -->

<head>
    <title>Indian Food Recpies Registration</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Food Signin Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css1/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="css1/font-awesome.css" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->
	
	<!-- Google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- Google fonts -->

</head>
<!-- //Head -->
<!-- Body -->

<body>
    
    <div class="content-w3ls">
        <div class="content-bottom">
			<h2>Registration Here</h2>
            <form action="#" method="post">
                <div class="field-group">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <div class="wthree-field">
                       <input type="text" name="username"  placeholder="Enter your  name"  required>
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <div class="wthree-field">
                         <input  type="email" name="email"  placeholder="Enter your Email id"  required>
                    </div>
                </div>
				<div class="field-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <div class="wthree-field">
                          <input type="password" name="pswdtxt"  placeholder="Enter your  Password"  required>
                    </div>
                </div>
				<div class="field-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <div class="wthree-field">
                          <input type="password" name="cpswdtxt"  placeholder="Confrim Password"  required>
                    </div>
                </div>
				
              
                <div class="wthree-field">
                    <input type="submit" name="btnok" value="Register" >
                </div>
               
            </form>
        </div>
    </div>
    <div class="copyright text-center">
        <p>© 2021-2022 
                made with  &nbsp;<i class="fa fa-heart"></i> AVPTI <i class="fa fa-heart"></i>&nbsp;  by&nbsp; 
              Bhavya&nbsp;,&nbsp;Meet&nbsp;,&nbsp;Ronak&nbsp;,&nbsp;Bhavin</div>
           
        </p>
    </div>
</body>
<!-- //Body -->
</html>
