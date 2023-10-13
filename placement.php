<?php require_once('include/Functions.php');?>
<?php 
session_start();
error_reporting(0);
include('conection.php');
$id= $_SESSION['id'];
$sql = "select name from `users` where id = $id";

$result = mysqli_query($conn,$sql);
  if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
                
               
                $Name = $DataRows['name'];   
            
               }}
               $msg="";

$q=" SELECT * FROM `placement` WHERE `id`='$id'";
$query = mysqli_query($conn,$q);

if (mysqli_num_rows($query)>0) {
    while ($Data = mysqli_fetch_assoc($query)) {
      $company=$Data['company name'];
      $salary=$Data['annual salary'].'PA';
      $joining=$Data['joining date'];
      
     
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












<nav class="nav-section">
    <div class="container">
      <div class="nav-right">
        
        <a href="stlogout.php"><i class="fa fa-sign-out"></i></i></a>
            
      </div>
      <ul class="main-menu">
       
        <li class="active"><a href="profile.php">profile</a></li>
        
         
      </ul>

    </div>
  </nav>


<!--ten th scoll section -->




<?php
if (isset($_POST['submit'])) {
include ('conection.php');
$company=$_POST['company'];
$date=$_POST['date'];
$salary=$_POST['salary'];

$sql = "UPDATE `placement` SET `company name`='$company', `annual salary` = '$salary',`joining date`='$date' WHERE `placement`.`id` = $id";

      $run = mysqli_query($conn,$sql);

      if ($run == true) {
        $msg="Updated Successfully.";
        
        ?>
        
        <?php
      } else {?>
         <?php $msg="Something Wrong."; 
      }
  }  

?>

 

<div class="main h-75" style="background:url(images/search.jpg);background-size: cover; background-repeat: repeat; opacity: 0.9;">
 <br><br>

    <form class="form-control w-50 m-auto" method="post" action="" style="background-color: white;opacity: 0.8;">
      <?php
            if($msg != "") {
              echo '<div class="alert alert-success">'.$msg.'</div>';
            }
            ?><br>
      <p class="form-header text-center">Update Placement Details</p>
      <hr>
     
               
                    
                    <div class="form-group">
                            <label for="company" class="col control-label">Enter company Name </label>
                          <div class="col">
                               <input type="text" name="company" placeholder="Enter Company Name" class="form-control" autofocus>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                            <label for="Roll" class="col control-label">Salary(LPA)</label>
                          <div class="col">
                               <input type="number" name="salary" placeholder="Enter Salary" class="form-control" autofocus>
                          </div>
                        </div>
                             
                          </div>
                          <div class="col-lg-6">
                             <div class="form-group">
                            <label for="Roll" class="col control-label">Joining Date</label>
                          <div class="col">
                               <input type="date" name="date" placeholder="Enter Joining Date" class="form-control" autofocus>
                          </div>
                        </div>
                          </div>
                        </div>
                
                       
                        <br>
                        <input type="submit" name="submit" value="Update" class=" btn btn-success form-control">
    </form>  
    
  </div>

<br>



<!--10 details update closed-->







<!--12th school section-->




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
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
  
</body>
</html>