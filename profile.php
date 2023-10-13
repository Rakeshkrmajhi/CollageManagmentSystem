<?php
session_start();
error_reporting(0);
$id= $_SESSION['id'];
include'conection.php';
if ($id==true) {
     # code...
 } 
 else{
    header('location:stlogout.php');
 }

 $sql = "SELECT * FROM `users` WHERE `id`=$id";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
                $Id = $DataRows['id'];
                $name = $DataRows['name'];
                 $email = $DataRows['email'];
                  $verify=$DataRows['is_confirmed'];
            }
            }


             $sqli = "SELECT * FROM `student` WHERE `id` = '$Id' ";

                        $result = mysqli_query($conn,$sqli);

                        if (mysqli_num_rows($result)>0) {
                            while ($DataRows = mysqli_fetch_assoc($result)) {
                         
                                $RollNo = $DataRows['rollno'];
                                 $Dept = $DataRows['dept'];
                              
                                $address = $DataRows['address'];
                                $Pcontact = $DataRows['contact'];
                                $year = $DataRows['year'];
                                $ProfilePic = $DataRows['image'];
                              
                                $dob=$DataRows['dob'];
                                $father=$DataRows['father'];
                                $mother=$DataRows['mother'];
                                $phone=$DataRows['phone'];
                                $regno=$DataRows['regno'];
}}
 ?><!DOCTYPE html>
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
<body >
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

                <li class="active"><a href="#">Hello!</a></li>
				<li class="active"><a href="#"><?php echo "$name";?></a></li>
				
				
				
        <li><a href="changepass.php">Change password</a></li>
        <li><a href="changepic.php">Change proffile pic</a></li>
       
			</ul>

		</div>
	</nav>
	
	<!-- Header section end -->

	<div class="main" style="background:url(images/images2.jpg);background-size:cover; background-repeat: repeat;"> 
 <section class="special-area bg-white section_padding_100" id="profile" style=" background-color: #191414;opacity: 0.8;">
    	
    	<div class="container"  >
    		<br><br>
    		<div class="row">
         
         	<div class="col-2" >
         			<div class="ProfilePic"><img src="../college/databaseimg/<?php echo $ProfilePic ?>" alt="img" style="border-radius: 10%;border: 5px solid black;  width: 120px;height: 150px;">
         			</div>
         			  <div class="row"><h7>&nbsp;&nbsp; <?php echo $name; ?></h7></div>
         	</div>
         	
         
        
         <div class="col-4">
         
         			
         	<div class="row">
         		<h7> Email:- <?php echo $email; ?></h7>
         	</div>
          <div class="row"> <h7> Roll Number:- <?php echo $RollNo; ?> </h7></div>
          <div class="row"> <h7> Registration No.:- <?php echo $regno; ?> </h7></div>
          <div class="row"> <h7> Date of Birth:- <?php echo $dob; ?> </h7></div>
          <div class="row"><h7> Contact No:-<?php echo $Pcontact ?> </h7></div>
         	  <div class="row"><h7> Department:- <?php echo $Dept; ?></h7></div>
          <div class="row"><h7>Batch:-  <?php echo ($year-4); ?> - <?php echo $year; ?></h7></div>
         	
         	
          
         	
         		
         </div>
         <div class="col-3">
          <div class="row"><h7> Father`s Name:-<?php echo $father ?> </h7></div>
              <div class="row"><h7> Mother`s Name:-<?php echo $mother ?> </h7></div>
              <div class="row"><h7> Guardian`s Contact No:- <?php echo $phone; ?> </h7></div>
              <div class="row"><h7> Address:-<?php echo $address ?> </h7></div>
           <a href="update.php"> <button class="btn btn-success form-control w-50"> Update</button></a>
         
         </div>
         <div class="col-3">
         	  <div class="card">
  <div class="card-header">Placement Details</div>
  <div class="card-body">
  	<?php 
  	$q=" SELECT * FROM `placement` WHERE `id`='$Id'";
  	$query = mysqli_query($conn,$q);

                        if (mysqli_num_rows($query)>0) {
                            while ($Data = mysqli_fetch_assoc($query)) {
                            	$company=$Data['company name'];
                            	$salary=$Data['annual salary']."LPA";
                            	$joining=$Data['joining date'];
                            	
                            	if($salary==0){
                                echo "..If placed then plese upadte details..";

                            }else

                            {
                            	echo $Data['company name'];?><br><?php
                            	echo $Data['joining date'];?><br><?php
                            	echo $Data['annual salary'] ;?> LPA <?php

                            }
                            }}

                            

  	?>
    

  </div>
  <div class="card-footer">
   

    <?php 
    $c_year= date('Y');
                    if(($year)==$c_year+1 OR ($year)==$c_year){  ?>
    <a href="placement.php"><button class=" btn btn-success form-control"> update</button></a><?php }?>
  </div>
</div>
<?php 
if($verify==3){ ?>
	<i class="fa fa-check-circle" style="font-size:20px;color:green;"> Verified Account</i>
	<?php
}else{
	 ?>
	<i class="fa fa-times-circle" style="font-size:20px;color:red;">Not Verified By College</i>
	<?php
}

         ?>			
         </div>
         </div>
         <br>
         <br>
         <div class="row">
         <div class="col-4">
         	<div class="card">
  <div class="card-header">10th Details</div>
  <div class="card-body" style="height: 110px;">
  	<?php 
  	$q=" SELECT * FROM `10th` WHERE `id`='$Id'";
  	$query = mysqli_query($conn,$q);

                        if (mysqli_num_rows($query)>0) {
                            while ($Data = mysqli_fetch_assoc($query)) {
                              $c=$Data['year'];
                            	if($c!=0000){
                            	echo $Data['school'];?><br><?php
                            	echo $Data['year'];?><br><?php
                            	echo $Data['percentage'];?> %<?php
                            } else{
                                  echo "..Please Update..";
                                }
                            }}

  	?>

  </div>
  <div class="card-footer  "><a href="updatex.php"> <button class=" btn btn-success form-control"  >update</button></a></div>
</div>

         </div> 
       <div class="col-4">
         	<div class="card">
  <div class="card-header">12th/Diploma Details</div>
  <div class="card-body" style="height: 110px;">
  	<?php 
  	$qu=" SELECT * FROM `12th` WHERE `id`='$Id'";
  	$query1 = mysqli_query($conn,$qu);

                        if (mysqli_num_rows($query1)>0) {
                            while ($Data = mysqli_fetch_assoc($query1)) {
                            	$d=$Data['year'];
                              if($d!=0000){
                            	echo $Data['school'];?><br><?php
                            	echo $Data['year'];?><br><?php
                            	echo $Data['percentage'];?> %<?php
                            } else{
                                  echo "..Please Update..";
                                }

                            }}

  	?>

  </div>
  <div class="card-footer"><a href="updatex.php"> <button class=" btn btn-success form-control"  >update</button></a></button></div>
</div>

         </div>
          <div class="col-4">
         	<div class="card">
  <div class="card-header">B.Tech Details</div>
  <div class="card-body" style="height: 110px;">
  	<?php 
  	$qu=" SELECT * FROM `marks` WHERE `id`='$Id'";
  	$query1 = mysqli_query($conn,$qu);

                        if (mysqli_num_rows($query1)>0) {
                            while ($Data = mysqli_fetch_assoc($query1)) {
                            	$count=0;
                            	$sum=0;
                            	if ($Data['sem1'] > 0) {
                            		$count+=1;
                            		$sum+=$Data['sem1'];
                            		echo "Sem 1:  ";
                            		echo $Data['sem1'];}
                                else{
                                  echo "..Please Update..";
                                }
                            		echo "&nbsp; ";
                            		if ($Data['sem2']!= 0) {
                            			$count+=1;
                            		$sum+=$Data['sem2'];
                            		echo "Sem 2:  ";
                            		echo $Data['sem2'];}echo "&nbsp; ";
                            		if ($Data['sem3']!= 0) {
                            			$count+=1;
                            		$sum+=$Data['sem3'];
                            		echo "Sem 3:  ";
                            		echo $Data['sem3'];}echo "&nbsp; ";
                            		if ($Data['sem4']!= 0) {
                            			$count+=1;
                            		$sum+=$Data['sem4'];
                            		echo "Sem 4:  ";
                            		echo $Data['sem4'];}echo "<br>";
                            		if ($Data['sem5']!= 0) {
                            			$count+=1;
                            		$sum+=$Data['sem5'];
                            		echo "Sem 5:  ";
                            		echo $Data['sem5'];}echo "&nbsp; ";
                            		if ($Data['sem6']!= 0) {
                            			$count+=1;
                            		$sum+=$Data['sem6'];
                            		echo "Sem 6:  ";
                            		echo $Data['sem6'];}echo "&nbsp; ";
                            		if ($Data['sem7']!= 0) {
                            			$count+=1;
                            		$sum+=$Data['sem7'];
                            		echo "Sem 7:  ";
                            		echo $Data['sem7'];}echo "&nbsp; ";
                            		if ($Data['sem8']!= 0) {
                            			$count+=1;
                            		$sum+=$Data['sem8'];
                            		echo "Sem 8:  ";
                            		echo $Data['sem8'];}
                            		echo "<br>";
                            		
                            		if ($count!=0 ) {
                                  $avg=($sum/$count);
                            			echo "Current Avarage:";echo "&nbsp; ";
                            			 $avg=round($avg, 2);
                            			echo $avg;
                            			
                            			# code...
                            		}
                                
                            	
                            }}

  	?>

  </div>
  <div class="card-footer"><a href="updategrad.php"><button class=" btn btn-success form-control" > update</button></a></div>
</div>

         </div>

     </div>
         </div>
         	<!--
              <?php   
              $c_year= date('Y');
                    if(($year-1)==$c_year){ ?>


                      <div class="row">
         <div class="col-4">
          <div class="card">
  <div class="card-header">10th Details</div>
  <div class="card-body">
   

  </div>
  <div class="card-footer"><button class="btn-success" style="border: 2px solid black; width: 60px;border-radius: 5px;"> update</button></div>
</div>

         </div> 


                  <?php  }


             ?>

                 
       -->
        
        <!-- Special Description Area -->
      <br><br><br>

    </section>
    <br><br>
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
