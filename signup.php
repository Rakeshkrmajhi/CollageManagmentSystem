


<?php 
	session_start();
include('conection.php');
$email= $_SESSION['email'];
//$email='sandipdey306@gmail.com';
if($email){

}else{
header('location:stlogout.php');
}
$msg="";
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn,$sql);

  if (mysqli_num_rows($result)>0) {

            while ($DataRows = mysqli_fetch_assoc($result)) {

                $id = $DataRows['id'];
               
                $name = $DataRows['name'];            
               
               }
        }
?>

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
	 <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/stylelogin.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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
				<a href=""><i class="fa fa-search"></i></a>
							</div>
			<p style="text-align: center;color: white;font-size: 20px;margin: 10px auto;">Hello <?php echo $name ?></p>

		</div>
	</nav>



<div class="container">
            <form method="post" class="form-horizontal" role="form"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  enctype="multipart/form-data">
                <h2 style="text-align: center;"> Complete Registration</h2>
                <hr style="">
                <br><?php
						if($msg != "") {
							echo '<div class="alert alert-success">'.$msg.'</div>';
						}
						?>
                   <div class="row">
                   		<div class="col-4">
					                <div class="">
					                    <label for="Name" class="col-sm-3 control-label">Name</label>
					                    <div class="col-sm-9">
					                        <input type="text" name="name" placeholder="<?php echo $name ?>" class="form-control" autofocus  disabled >
					                    </div>
					                </div>
				          </div>
				          <div class="col-4">     
				                <div class="">
				                    <label for="email" class="col-sm-3 control-label">Email </label>
				                    <div class="col-sm-9">
				                        <input type="email"  name="email"  placeholder="<?php echo $email ?>" class="form-control" disabled>
				                    </div>
				                </div>
		                	</div>
		                	<div class="col-4">
		                		<div class="">
                    				<label for="phoneNumber"  class="col-sm-3 control-label">Phone</label>
                    				<div class="col-sm-9">
                        				<input type="phoneNumber" name="phone"  placeholder="Phone number" class="form-control">
                       					
                  					 </div>
                				</div>
		                	</div>
                
            		</div><br>
            		
                
                <div class="row">
	                 <div class="col-4">
	            				<div class="">
					                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
								    <div class="col-sm-9">
				                        <input type="date" name="dob"  class="form-control">
				                    </div>
	               				</div>
	            	</div>
	            	<div class="col-4">
	            		<div class="">
                   				 <label for="parent" class="col-sm-3 control-label">Depertment</label>
                  				  <div class="col-sm-9">
                     				  <select name="dept" class="form-control"  style="height: 32px;">
                                  		  <option >SELECT DEPARTMENT</option>
                                		    <option>CSE</option>
		                                  	  <option>ME</option>
		                                  	  <option>CE</option>
		                                  	  <option>ECE</option>
		                                  	  <option>EE</option>
		                                </select>
                   				 </div>
                			</div>
	            	</div>
	            	<div class="col-4 ">
	            		<div class="">
                    <label for="parent" class="col-sm-3 control-label">Batch</label>
                    <div class="col-sm-9">
                       <select name="year" class="form-control"  required="" style="height: 32px;">
                                    <option>SELECT </option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                </select>
                    </div>
                </div>
                

	            	</div>
	            	

                 </div><br>

<div class="row">
            			
            			<div class="col-6">
            				
            				<div class="form-control">
	                    			<label for="Roll" class="col-sm-3 control-label">Roll Number</label>
	                    		<div class="col-sm-9">
	                       			 <input type="text" name="roll" placeholder="Enter Your Roll Number" class="form-control" autofocus required>
	                    		</div>
                  			</div>
            			</div>
						<div class="col-6">
							<label for="Roll" class="col-sm-3 control-label">Reg. Number</label>
							<div class="form-control">
                    			
	                    		<div class="col-sm-9">
	                      			  <input type="text" name="reg"  placeholder="Enter Your Reg. Number" class="form-control" autofocus  required>
	                    		</div>
               			 	</div>
						</div>            		
            		</div><br>

            		<div class="row">
            			<div class="col-4">
            				<label for="parent" class="col-sm-3 control-label ">Father`s Name</label>
            				<div class="form-group">
			                    
			                    <div class="col-sm-9">
			                        <input type="text" name="father"  placeholder="Enter Father`s Name" class="form-control"  required>
                    			</div>
               				 </div>
            			</div>
            			<div class="col-4">
            				 <label for="parent" class="col-sm-3 control-label">Mother`s Name</label>
            				 <div class="form-group">
				                   
				                    <div class="col-sm-9">
				                        <input type="text" name="mother"  placeholder="Enter Mother`s Name" class="form-control"  required>
				                    </div>
				                </div>
            			</div>
			            <div class="col-4">
			            	 <label for="phoneNumber"  class="col-sm-3 control-label"> Guardian`s Phone number </label>
			            	<div class="form-group">
			                   
			                    <div class="col-sm-9">
			                        <input type="number" name="mobile"  placeholder=" Guardian`s Phone number" class="form-control"  required>
                      
                    			</div>
             				   </div>
            			</div>
            		</div>


<br>

            		<div class="row">
            			<div class="col-sm-3"> <label for="parent" class="col-sm-3 control-label">Address:</label></div>
            		

            		<div class="col-sm-9">
            			<div class="row">
            				<div class="col-sm-6">
            					<div class="form-control">
			                    <label for="parent" class="col-sm-3 control-label">Village/town</label>
			                    <div class="col-sm-9">
			                        <input type="text" name="vill"  placeholder="address line 1" class="form-control"  required>
			                    </div>
                            	</div>
                
            				</div>
            				<div class="col-sm-6">
            					<div class="form-control">
			                    <label for="parent" class="col-sm-3 control-label">District</label>
			                    <div class="col-sm-9">
			                        <input type="text" name="dist"  placeholder="Enter District Name" class="form-control"  required>
			                    </div>
                            	</div>
                
            				</div>
            			</div>
            		
            				<br>

            			<div class="row">
            				<div class="col-sm-6">
            					<div class="form-control">
			                    <label for="parent" class="col-sm-3 control-label">State</label>
			                    <div class="col-sm-9">
			                        <input type="text" name="state"  placeholder="Enter State Name" class="form-control"  required>
			                    </div>
                            	</div>
                
            				</div>
            				<div class="col-sm-6">
            					<div class="form-control">
			                    <label for="parent" class="col-sm-3 control-label">Pincode</label>
			                    <div class="col-sm-9">
			                        <input type="text" maxlength="6"  name="pin"  placeholder="Enter Pincode" class="form-control"  required>
			                    </div>
                            	</div>
                
            				</div>
            			</div></div>
            		</div>


            				<div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
              
                <input class="btn btn-primary btn-block" type="submit" name="submit"  class="form-submit" value="Finish"  />
                </div>
               
                
                  
                
               
                 
               
                
            </form> <!-- /form -->
        </div> <!-- ./container -->




	
<br>

	<!-- Footer section -->
	<footer class="footer-section">
		
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
	<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
	
</body>
</html>
<?php 

	
 if (isset($_POST['submit'])) {
			
			include ('conection.php');
			$roll=$_POST['roll'];
			
			$phone=$_POST['phone'];
			$dept=$_POST['dept'];
			$reg=$_POST['reg'];
			$parent=$_POST['mobile'];
			$father=$_POST['father'];
		
			$mother=$_POST['mother'];
			$id=$id;
			
			$year=$_POST['year'];
			$dob=$_POST['dob'];
			$vill=$_POST['vill'];
			$dist=$_POST['dist'];
			$state=$_POST['state'];
			$pin=$_POST['pin'];
			$address = $vill.",".$dist.",".$state."-".$pin;
			

			$sqli =	"INSERT INTO `student` (`id`, `rollno`, `regno`, `dob`, `dept`, `address`, `contact`, `year`, `image`, `phone`, `father`, `mother`) VALUES ('$id', '$roll', '$reg', '$dob', '$dept', '$address', '$phone', '$year', '1.jpg', '$parent', '$father', '$mother')";
				$run = mysqli_query($conn,$sqli);

			if ($run == true) {
				$conn->query("UPDATE users SET is_confirmed=2, token='' WHERE email='$email'");
				$conn->query("INSERT INTO `10th` (`id`,`year`, `school`, `percentage`, `grade`) VALUES ('$id','0000', 'update school name', '00', 'F')");
				$conn->query("INSERT INTO `12th` (`id`, `year`, `school`, `percentage`, `grade`) VALUES ('$id','0000', 'update school name', '00', 'F')");
				$conn->query("INSERT INTO `marks` (`id`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`) VALUES ('$id', '0', '0', '0', '0', '0', '0', '0', '0')");
				$conn->query("INSERT INTO `placement` (`id`, `company name`, `annual salary`, `joining date`) VALUES ('$id', NULL, NULL, NULL)");

				
				
				?>
				<script>
					alert("registered Successfully.Please Login."); 
					
					window.open('stlogout.php','_self');

				</script>
				<?php
			} else {?>
 				 <script>
					alert("Something  went Wrong !");
				</script><?php 
			}
		} else {
				?>
				
				<?php
		}


	
 ?>


