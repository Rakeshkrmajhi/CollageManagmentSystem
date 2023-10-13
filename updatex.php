<?php require_once('include/Functions.php');?>
<?php 
 

session_start();
include('conection.php');
$id= $_SESSION['id'];
$sql = "select name from `users` where id = $id";

$result = mysqli_query($conn,$sql);
  if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
                
               
                $Name = $DataRows['name'];   
            
               }}
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












<nav class="nav-section">
    <div class="container">
      <div class="nav-right">
        
        <a href="stlogout.php"><i class="fa fa-sign-out"></i></i></a>
            
      </div>
      <ul class="main-menu">
        <li class="active"style="padding: 1%;"><a href="#">HELLO:) <?php echo "$Name";?></a></li>
        <li class=""><a href="profile.php">Home</a></li>
        
         
      </ul>

    </div>
  </nav>


<!--ten th scoll section -->




<?php
if (isset($_POST['submit'])) {
include ('conection.php');
$exam=$_POST['exam'];
$year=$_POST['year'];
$school=$_POST['school'];
$pert=$_POST['pert'];
$grade=$_POST['grade'];
$sql = "UPDATE `$exam` SET `year`='$year', `school` = '$school',`percentage`='$pert',`grade`='$grade' WHERE `$exam`.`id` = $id";

      $run = mysqli_query($conn,$sql);

      if ($run == true) {
        $msg="Updated Successfully.";
        
        ?>
        
        <?php
      } else {?>
         <?php $msg="Something Wrong."; 
      }
    } else {
        ?>
        
        <?php
    }


?>

 

<div class="main" style="background:url(images/images3.jpg);background-size: cover; background-repeat: repeat;">
 <br>

    <form class="form-control w-50 m-auto" method="post" action="" style="background-color: white;opacity: 0.7;">
      <?php
            if($msg != "") {
              echo '<div class="alert alert-success">'.$msg.'</div>';
            }
            ?>
      <p class="form-header text-center">Update Educattion Details</p>
      <hr>
     
               
                    
                    <div class="form-group">
                            <label for="Roll" class="col control-label">Enter School Name </label>
                          <div class="col">
                               <input type="text" name="school" placeholder="Enter Your School Name" class="form-control" autofocus>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            
                              <div class="form-group">
                                 <div class="col">
                                         <label for="parent" class="col control-label">EXAM</label>
                                       <select name="exam" class="form-control" required>
                                        <option >SELECT EXAM</option>
                                        <option>10th</option>
                                          <option>12th</option>
                                          
                                    </select>
                           </div>
                      </div>
                          </div>
                          <div class="col-lg-6">
                             <div class="form-group">
                            <label for="Roll" class="col control-label">Year</label>
                          <div class="col">
                               <input type="text" name="year" placeholder="Enter Passing year" class="form-control" autofocus required>
                          </div>
                        </div>
                          </div>
                        </div>
                
                        
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                            <label for="Roll" class="col control-label">Marks(%)</label>
                          <div class="col">
                               <input type="text" name="pert" placeholder="Enter Your per of Marks" class="form-control" autofocus required>
                          </div>
                        </div>
                          </div>
                          <div class="col-lg-6">
                             <div class="form-group">
                            <label for="Roll" class="col control-label">Obtained Grade</label>
                          <div class="col">
                               <input type="text" name="grade" placeholder="Enter Obtained Grade" class="form-control" autofocus required>
                          </div>
                        </div>
                          </div>
                        </div>
                         
                        
                        <input type="submit" name="submit" value="Update" class=" btn btn-success form-control">
                        <br>
    </form>  
    <br><br>
  </div>





<!--10 details update closed-->







<!--12th school section-->




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
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
  
</body>
</html>