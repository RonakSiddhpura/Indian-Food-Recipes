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
			window.location="../healthy-recipe/index.php";
	</script>
			<?php
}
}
?>

<html>
<!-- Head -->

<head>
    <title>Indian Food Recpies Signin </title>
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
    <h1 class="title-agile text-center">Food Sign in form</h1>
    <div class="content-w3ls">
        <div class="content-bottom">
			<h2>Sign In Here</h2>
            <form action="#" method="post">
                <div class="field-group">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input  name="mail" type="email"   placeholder="Enter your Email id" required>
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input type="password" name="pswdtxt"  placeholder="Enter your  Password"  required>
                    </div>
                </div>
                <div class="field-group">
                  
                    <!-- script for show password -->
                    <script>
                        function myFunction() {
                            var x = document.getElementById("myInput");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>
                    <!-- //script for show password -->
                </div>
                <div class="wthree-field">
                    <input  name="btnok" value="Login" id="saveForm"  type="submit"  />
                </div>
               
                <br>
                <div class="wthree-field">
                  <h3 style=" color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Don't have an account ? <a href="registration.php" style="color:white; text-decoration:underline;">Register</a>
                </h3>
                   
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
