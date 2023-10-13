
<?php require_once('include/Functions.php');?>
<?php 
 


session_start();
error_reporting(0);
$id= $_SESSION['id'];
include'conection.php';

$sqli = "select * from `users` where id = $id";
$res = mysqli_query($conn,$sqli);
  if (mysqli_num_rows($res)>0) {
            while ($DataRows = mysqli_fetch_assoc($res)) {
                $Id = $DataRows['id'];
                $Name = $DataRows['name'];
                $email = $DataRows['email'];
			}}

$sql = "select * from `student` where id = $id";

$result = mysqli_query($conn,$sql);
  if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
                $Id = $DataRows['id'];
                $RollNo = $DataRows['rollno'];
               
               
                $ProfilePic = $DataRows['image'];
                
               
                
            
               }}


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


	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			<div class="nav-right">
				
				<a href="stlogout.php"><i class="fa fa-sign-out"></i></i></a>
						
			</div>
			<ul class="main-menu">
				<li class="active"style="padding: 1%;"><a href="#">HELLO:) <?php echo "$Name";?></a></li>
				<li class=""><a href="profile.php">profile</a></li>
				
				 
			</ul>

		</div>
	</nav>

	<!-- Header section end -->


				<div class="main h-75" style="background:url(images/2.jpg);background-size: cover; background-repeat: repeat;"><br>
						<div class="form-group" style="width: 50%; margin-left: 25%;margin-right: 25%;border-style: groove;padding: 40px; border-radius: 10px;background-color: white;opacity: 0.8;" >
           
           
                 
                           <form action="UpdateImg.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" >
                              <div class="form-group">
                                  User Name:<input type="text" class="form-control" name="Name" value=" <?php echo $email;?>" disabled>
                              </div>



						<img  style="height: 150px;width: 120px;"src="databaseimg/<?php echo $ProfilePic;?>" alt="img" ><br><br>
						
							<input type="file" name="updateimg" style="float: left;" class="btn btn-info btn-sm">
							<input type="hidden" name="id" value="<?php echo $Id; ?>">
							<input type="submit" name="submitimg" value="UPDATE" class="btn btn-warning btn-sm" style="float: right;"><br>
					

                           
                            </form>
                        </div>
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
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	
</body>
</html>