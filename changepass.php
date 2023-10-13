
<?php 
 


session_start();
error_reporting(0);
$id= $_SESSION['id'];
include'conection.php';
$sql = "SELECT * FROM `users` WHERE `id`=$id";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
                $Id = $DataRows['id'];
                $name = $DataRows['name'];
                $Password = $DataRows['password'];
                
                 $email = $DataRows['email'];
            }
            }


$msg="";

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<title>RKMGEC</title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords" content="event, unica, creative, html">
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


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

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


	<!-- nav section  -->
	<nav class="nav-section">
		<div class="container">
			<div class="nav-right">
				
				<a href="stlogout.php"><i class="fa fa-sign-out"></i></i></a>
			</div>
			<ul class="main-menu">

                <li class="active"><a href="#">Hello!</a></li>
				<li class="active"><a href="#"><?php echo "$name";?></a></li>
				<li><a href="profile.php" style="margin-left: 5px; ">Home</a></li>
			
        <li><a href="changepic.php">Change proffile pic</a></li>
       
			</ul>

		</div>
	</nav>
	<div class="main h-75" style="background:url(images/1.jpg);background-size:cover; background-repeat: repeat;";>
	
	<!-- nav section end --><br><br><br>

						<div class="form-group" style="width: 50%; margin-left: 25%;margin-right: 25%;border-style: groove;border-radius: 10px; background-color: #ffffff;opacity: 0.7;">
           
           
                 
                            <form style="" method="post"  class="w-75 m-auto">
                            	<?php
						if($msg != "") {
							echo '<div class="alert alert-success">'.$msg.'</div>';
						}
					?><br>
                              <div class="form-group">
                                  User Name:<input type="text" class="form-control" name="Name" value=" <?php echo $email;?>" disabled>
                              </div>
                            <div class="form-group">
                                 New Password:<input type="text" class="form-control" name="new_pass" placeholder="Enter New Password" >
                            </div>
                             <div class="form-group">
                                 Confirm Password:<input type="text" class="form-control" name="confirm_pass" placeholder=" Re Enter  Password " required>
                            </div>
                              <div class="form-group">
                                  <input type="submit" name="submit" value="CHANGE" class="btn btn-success btn-block text-center" > 
                              </div> <br>
                            </form>
                        </div>
                    


	
	

</div>

	

	<!-- Footer section -->
	<footer class="footer-section">
		
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
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	
</body>
</html>
<?php 
//This php code block is for editing the data that we got after clicking on update button
	if (isset($_POST['submit'])) {
		 
		
			include ('conection.php');
		
			$pass=$_POST['new_pass'];
			$cpass=$_POST['confirm_pass'];
			
			
if($pass==$cpass){
	$pass=md5($pass);
			$sql = "UPDATE users SET password = '$pass' WHERE id = '$Id'";

			$Execute = mysqli_query($conn,$sql);

			if ($Execute) {
				$msg="Password Updated Succesfuly.";
              

			}
			else{
			
			$msg=" Please Enter Correct Password";
			}


		

	}
	else{
			
			$msg=" Please Enter Correct Password";
			}
	}

 ?>