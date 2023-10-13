
<?php
session_start();

error_reporting(0);


$msg=" OTP sent, plaese check mail";
$msg1=$_SESSION['msg'];

if($msg1){
	$msg=$_SESSION['msg'];
}
$email= $_SESSION['email'];
include 'conection.php';
$con = new mysqli('localhost', 'root', '', 'database');

$sqli = $con->query("SELECT id FROM users WHERE email='$email' ");
	       if ($sqli->num_rows > 0) {
					 # code...
 			} 
	
      
 			else{
   				 header('location:newuser.php');
 				}


 if( isset($_POST['verify']) ) {
	
				$token = $con->real_escape_string($_POST['otp']);
	
				$sql = $con->query("SELECT id FROM users WHERE email='$email' AND token='$token' AND is_confirmed=0");
	       if ($sql->num_rows > 0) {
		       $con->query("UPDATE users SET is_confirmed=1, token='' WHERE email='$email'");
		       echo ' Great your email address verified. You can <a href="login.php">login</a> now.';
		       $_SESSION['email'] = $email;
      	       ?><script type="text/javascript"> window.open('signup.php','_self');
   		       </script></script><?php
	        } 
	        else {
		        $msg= "Please Enter Correct Otp";
	          }

   
       }


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>RKMGEC</title>
	<meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/faviconn.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	 <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/stylelogin.css">


 
</head>
<body scroll="no" style="overflow: hidden">
	<!-- Page Preloder -->
	

	<!-- header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="index.html" class="site-logo"><h1 style="font-size: 30px;color: #191742">RKMGEC</h1></a>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-phone"></i>
					<p><span>Phone:</span> 082505 64682</p>
				</div>
				<div class="hf-item">
					<i class="fa fa-map-marker"></i>
					<p><span>Find us:</span>Aghorpur,Purulia,723103,WB</p>
				</div>
			</div>
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section">
        <div class="container">
            <div class="nav-right">
            
                <a href="stlogout.php"><i class="fa fa-sign-in"></i></i></a>
            </div>
            <ul class="main-menu">
                <li class="active"><a href="stlogout.php">Home</a></li>
               
            </ul>

        </div>
    </nav>
	<!-- Header section end -->


  <div class="main " style="background:url(images/2.jpg);background-size:cover; background-repeat: repeat;">   


       <!-- Sing in  Form -->
        
        <section>
        	<br>
                   <div class="form-control col-lg-16 col-md-6 col-12 w-25 m-auto"  style="background-color:white; opacity: 0.8;"> 
                        <form method="POST" class="register-form" id="login-form" action="verify.php">
                        	<?php
						if($msg != "") {
							echo '<div class="alert alert-success">'.$msg.'</div>';
						}
					?>
                        	<div class="form-header" > <p class="text-center btn-info form-control">Verify OTP </p></div>
                        	<br><br>
                        	<div class="form-row">
							    <div class="col">
							      <input type="text" name="otp"class="form-control" placeholder="Enter OTP" maxlength="6">
							    </div>
							    <div class="col">
							      <input type="submit" name="verify" class="col-12 btn-success form-control" value="verify"  >
							    </div>

							  </div><hr>
							  <div class="text-center"  ><a href="resendotp.php">Resend OTP</a></div>
							 
							  
							  
							  <hr>
							
							
                        </form>
</div>


</section><br><br><br><br><br>
    </div>


	


	<!-- Footer section -->
	<footer class="footer-section fixed-bottom ">
		
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">Subhadeep Modak</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>		
		</div>
	</footer>
	<!-- Footer section end-->



	<!--====== Javascripts & Jquery ======-->
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main1.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	
</body>
</html>