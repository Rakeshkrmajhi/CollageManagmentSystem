<?php
session_start();
error_reporting(0);


include 'conection.php';
	$msg = "";
	if( isset($_POST['register']) ) {
	$con = new mysqli('localhost', 'root', '', 'database');
		$f_name = $con->real_escape_string($_POST['f_name']);
		$l_name = $con->real_escape_string($_POST['l_name']);
		
		$user_name = $f_name  . ' ' . $l_name;
		$user_email = $con->real_escape_string($_POST['user_email']);
		$password = $con->real_escape_string($_POST['password']);
		$confirm_password = $con->real_escape_string($_POST['confirm_password']);

		if($password !== $confirm_password) {
			$msg = "Please check your password.";
		} else {
			$sql = $conn->query("SELECT id FROM users WHERE email='$user_email'");
			if($sql->num_rows > 0) {
				$msg = "This email already exists.";

			} else {
				$password = md5($password);
				// generate token
				$token = "1234567890";
				$token = str_shuffle($token);
				$token = substr($token, 0, 6);

			$conn->query("INSERT INTO `users` (`id`, `name`, `email`, `password`, `usertype`, `is_confirmed`, `token`) VALUES (NULL,$user_name', '$user_email', '$password', 'Student','0','$token')");



					$sql="INSERT INTO `users` (`id`, `name`, `email`, `password`, `usertype`, `is_confirmed`, `token`) VALUES (NULL,'$user_name', '$user_email', '$password', 'Student','0','$token')";
					$Execute = mysqli_query($conn,$sql);
				// send email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				// More headers
				$headers .= 'From: Purulia Government Engineering College' . "\r\n";

				$subject = "Verify your email";
				//$message='include('email.php')';

				$message = '<p>Hi '.$user_name.',<br>Welcome To RKMGEC student Database System <br>
				Username: &nbsp;'.$user_email.'
				<br>
				Password: &nbsp;'.$confirm_password.'<br><br> Your OTP is <h1 style="font-size:50px; color:red;">'.$token.' </h1>
				<br>Thank You.</p>';

				
				
					if ($Execute) {
						//send mail
						mail($user_email, $subject, $message, $headers);
				$msg = "You have been registered. Please confirm your email address to proced next step.";

					   $_SESSION['email'] = $user_email;
                    ?><script type="text/javascript"> window.open('verify.php','_self');
    </script></script><?php


			}
				else{ 
					$msg="Something wrong";
				}
			}
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
<body>
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
				<a href="Search.html"><i class="fa fa-search"></i></a>
							</div>
			<ul class="main-menu">
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="department.php">Department</a></li>
				<li><a href="#">Admission</a></li>
				<li><a href="#">Facilities</a></li>
				<li><a href="placement1.php">Placement</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>

		</div>
	</nav>
	<!-- Header section end -->


  <div class="main " style="background:url(images/search.jpg);background-size: auto; background-repeat: repeat;";>   


       <!-- Sing in  Form -->
        <section class="sign-in"  >
        
        	<div id="preloder">
					<div class="loader"></div>
			</div>
           
        
                	<div class="form-control col-lg-16 col-md-6 col-12 w-50 m-auto"  style="background-color:  black;opacity: 0.7;"> 
                	            
                        
                        <form method="POST" class="register-form" id="login-form" action="newuser.php"><div class="form-header" > <p class="text-center form-control"> Register </p></div>
                        	<?php
						if($msg != "") {
							echo '<div class="alert alert-success">'.$msg.'</div>';
						}
					?>
                        	
                        	<br>
                        	<div class="form-row">
							    <div class="col">
							      <input type="text"  name="f_name" class="form-control" placeholder="First Name"  autocomplete="off" style="text-transform: uppercase;"  required>
							    </div> 
							    <div class="col">
							      <input type="text" name="l_name" class="form-control" placeholder="Last Name"  autocomplete="off" style="text-transform: uppercase;" required>
							    </div>
							  </div>
							  <br>
							  
							  
							  <div class="form-row">
							    <div class="col">
							     
							      <input type="password" name="password" id="password" class="demoInputBox form-control" onKeyUp="checkPasswordStrength();" placeholder="Enter password" required /><div id="password-strength-status"></div>
							    </div>
							    <div class="col">
							      <input type="password" name="confirm_password" id="password" class="demoInputBox form-control" onKeyUp="checkPasswordStrength();" placeholder="Confirm password" required /><div id="password-strength-status"></div>
							    </div>
							  </div>
							
                               <br>
                            
                            <div class="form-row pd-5  form-row">
                            	<div class="col-10">
							  	<input type="email" name="user_email" placeholder="Enter Your Email"  class="form-control " autocomplete="off" required></div>
							  	<div class="col">
							  	<input type="submit" name="register" class="col-12 btn-success form-control" value="Login"  >
							  </div>
							</div>
							<br>
							<p>Already Registered?<a href="login.php">click Here </a></p><br>
                        </form>
							   
							  </div>
                
        </section>
       
							  
							
							
    </div>


	


	<!-- Footer section -->
	<footer class="footer-section fixed-bottom">
		
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Subhadeep Modak</a>
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
	<script type="text/javascript">
		function checkPasswordStrength() {
var number = /([0-9])/;
var alphabets = /([a-zA-Z])/;
var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
if($('#password').val().length<6) {
$('#password-strength-status').removeClass();
$('#password-strength-status').addClass('weak-password');
$('#password-strength-status').html("Weak (should be atleast 6 characters.)");
} else {  	
if($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {            
$('#password-strength-status').removeClass();
$('#password-strength-status').addClass('strong-password');
$('#password-strength-status').html("Strong");
} else {
$('#password-strength-status').removeClass();
$('#password-strength-status').addClass('medium-password');
$('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)");
}}}

	</script>
	
</body>
</html>


