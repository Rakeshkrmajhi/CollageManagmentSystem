
<?php include 'dbcon.php';?>
<?php require_once('../college/include/Session.php');?>
<?php require_once('../college/include/Functions.php');?> 
<?php echo AdminAreaAccess(); 
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
     <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

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
				<a href=""><i class="fa fa-search"></i></a>
				<a href="adminlogout.php"><i class="fa fa-sign-out"></i></i></a>
			</div>
			<ul class="main-menu">
				<li class="active"><a href="#">Welcome Admin</a></li>
                <li class=""><a href="notice.php">Notice</a></li>
                <li class=""><a href="event_add.php">Events</a></li>
				
			</ul>

		</div>
	</nav>
	<!-- Header section end -->

<div class="student-info text-center">
                <div class="container-fluid">
                  
                    <div class="row">
                        <div class="col-md-12 jumbotron">
                            <h2>Student's information</h2>
                            <form action="admindash.php" method="post">
                            	<select name="year" class="btn btn-info" >
                                    <option>SELECT BATCH</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                     <option>2025</option>
                                </select>

                <input type="text" name="roll" placeholder="Enter Roll Number" style="width: 240px;height: 35px;"><span>OR/AND<span>
                 <select name="standard" class="btn btn-info" >
                                    <option>SELECT DEPARTMENT</option>
                                    <option>CSE</option>
                                    <option>ECE</option>
                                    <option>ME</option>
                                    <option>CE</option>
                                    <option>EE</option>
                                     <option>4</option>
                                </select>
                  <input type="submit" name="show" value="SHOW INFO" class="btn btn-success text-center" style="margin-left: 30px;" >  
                            </form>
                        </div>
                    </div>
                </div>
            </div>


<div id="print-content" >
    
 
<table class="table table-bordered col-11 " >
    <tr  class="table-header">
        <th class="text-center">Roll No.</th>
        <th class="text-center">Dept.</th>
        <th class="text-center"> Passsout Year</th>
        <th class="text-center">Full Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Date of Birth</th>
        <th class="text-center">Address</th>
        <th class="text-center">phone No.</th>
        <th class="text-center">Profile Pic</th>
        <th class="text-center">Select</th>
        <th class="text-center">Action</th>

    </tr>





<?php 
    include('dbcon.php');
    if (isset($_POST['show'])) {

        $Standard = $_POST['standard'];
        $RollNo = $_POST['roll'];
        $year = $_POST['year'];

        $sql = "SELECT * FROM `student` WHERE `dept` = '$Standard' OR `rollno`='$RollNo' or `year`='$year' ";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
                $Id = $DataRows['id'];
                $RollNo = $DataRows['rollno'];
                 $Dept = $DataRows['dept'];
              
                $address = $DataRows['address'];
                $Pcontact = $DataRows['contact'];
                $year = $DataRows['year'];
                $ProfilePic = $DataRows['image'];
                
                $dob=$DataRows['dob'];
                ?>
                <tr  class="text-center"> 

                	<?php $qry = "SELECT `name`,`email`,`is_confirmed` FROM `users` WHERE ID='$Id' ";
        
       				 $run  = mysqli_query($conn, $qry);

      				 $row = mysqli_num_rows($run);

       				 if($row > 0) {
         			$data = mysqli_fetch_assoc($run);
                    $Name= $data['name'];
                    $email=$data['email'];
                    $cnf=$data['is_confirmed'];
                	}?>
                    <td><?php echo $RollNo;?></td>
                    <td><?php echo $Dept;?></td>
                    <td><?php echo $year;?></td>
                    <td><?php echo $Name; ?></td>
                     <td><?php echo $email; ?></td>
                      <td><?php echo $dob; ?></td>
                    <td><?php echo $address; ?></td>
                    <td><?php echo $Pcontact; ?></td>
                    
                    <td><img src="databaseimg/<?php echo $ProfilePic;?>" alt="img" style="height: 100px;<width: 80px;" ></td>
                    <form method="POST" action="testing.php?id=<?php echo $Id; ?>">
                        
                    
                    <td>
                        <input type="checkbox" name="keytodelete" value="<?php echo $Id; ?>">
                    </td>

                    <td><?php
                    if($cnf<=2)
                        {?>
                     <a href="verify1.php?id=<?php echo $Id; ?>"><input type=" submit" class="btn btn-success " name="verify1" value="Verify" style="width: 80px;"></a><hr>
                   <?php }if($cnf==3){?>
                    <input type=" submit" class="btn btn-success " name="verify1" value="Verified" style="width: 80px;" disabled=""><hr>

                  <?php }
                    ?>
                    <input type="submit" class="btn btn-danger" name="delbtn" value="Delete" style="width: 80px;"></td>
                    </form>
                </tr>
                <?php
                
            }
            
        } else {
            echo "<tr><td colspan ='12' class='text-center'>No Record Found</td></tr>";
        }
    }

 ?>

</table>
 <form>

  <input type="button" class="btn btn-danger"style=" margin-left: 10px; width: 80px;" onclick="printDiv('print-content')" value="Print"/>
</form>
</div>

<!--<div id="print-content">
 <form>

  <input type="button" onclick="printDiv('print-content')" value="Print"/>
</form>
</div> -->
	
	
<br>
<br>
<br>
<br>


	


	<!-- Footer section -->
	<footer class="footer-section">
		
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Subhadeep Modak</a>
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
    <script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        w=window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    }</script>
	
</body>
</html>
<?php include 'dbcon.php'?>