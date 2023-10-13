<?php  
include('dbcon.php');
if(isset($_POST["submit_n"]))

{
        $n_dec = $conn->real_escape_string($_POST['n_dec']);
        $n_date= $conn->real_escape_string($_POST['n_date']);
        $n_titl= $conn->real_escape_string($_POST['n_titl']);


          
       
      
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["fileToUpload"]["name"];
  
    #temporary file name to store file
    $tname = $_FILES["fileToUpload"]["tmp_name"];
    
     #upload directory path
$uploads_dir = 'notice';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
  
    #sql query to insert into database
    $sql = "INSERT INTO `notice` (`n_id`,`n_titl`, `n_dec`, `n_date`, `n_file`) VALUES (NULL,'$n_titl', '$n_dec', '$n_date','$pname')";

  
    if(mysqli_query($conn,$sql)){
    	       	?>
       <script type="text/javascript"> window.open('notice.php','_self');
                        </script><?php
  
   // echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }


}



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
				<a href="Search.html"><i class="fa fa-search"></i></a>
				<a href="adminlogin.php"><i class="fa fa-sign-in"></i></i></a>
			</div>
			<ul class="main-menu">
				<li class=""><a href="admindash.php">Welcome Admin</a></li>
                <li class="active"><a href="notice.php">otice</a></li>
                <li class=""><a href="event_add.php">Events</a></li>
			</ul>

		</div>
	</nav>
	<!-- Header section end -->

<!-- form section -->


<div class="container" >
				<br>
		<p class="text-center" style="font-size: 1.5vw;">Enter Notice Details</p>
		<hr>

	<br>
	<form class=" form-control m-auto" style="width: 500px;" method="post" action="notice.php" enctype="multipart/form-data">
		<div>
			<label> Noice Title</label>
			<input type="text" name="n_titl" value="" id="" class="form-control" required="">
		</div>
		
		<div>
			<label> Notice Description</label>
			<input type="text" name="n_dec" value="" id="" class="form-control" required="">
		</div>
		<div>
			<label >Notice Date</label>
			<input type="Date" name="n_date" class="form-control" value="Enter Date" placeholder="" required="">
		</div>
		<div>
			<label>Upload File</label>
			<input type="file" name="fileToUpload" id="fileToUpload" accept="application/pdf"  class="form-control" placeholder="
			Upload File" required="">
		</div>
		<br>
		<div>
			<input type="submit" name="submit_n" class="form-control btn-success" >
		</div>
<br><br>

	</form>
	<br><br><br>


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