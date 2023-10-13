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
       
        <li class="active"><a href="profile.php">Home</a></li>
        
         
      </ul>

    </div>
  </nav>


<!--ten th scoll section -->
 <?php
if (isset($_POST['submit'])) {
include ('conection.php');
$Semester=$_POST['Semester'];
$grade=$_POST['grade'];

$sql = "UPDATE `marks` SET `$Semester`='$grade' WHERE `marks`.`id` = $id";

      $run = mysqli_query($conn,$sql);

      if ($run == true) {
        
        
        $msg="Updated Successfully.";
       
      } 
      else {
         $msg="Something Wrong!.";
      }
    }


?>



<div class="main h-75"  style="background:url(images/images1.jpg);background-size: cover; background-repeat: repeat; opacity: 0.9;">
 <br><br>

    <form class="form-control w-50 m-auto" method="post" action="" style="background-color: white;opacity: 0.8;"><br>
      <?php
            if($msg != "") {
              echo '<div class="alert alert-success">'.$msg.'</div>';
            }
            ?>
      <p class="form-header text-center">Update Semester Grade</p>
      <hr>
     
               
                    
                    
                        <div class="row">
                          <div class="col-lg-6">
                            
                              <div class="form-group">
                                 <div class="col">
                                         <label for="parent" class="col control-label">Semester</label>
                                       <select name="Semester" class="form-control" required>
                                        <option >Select Semester</option>
                                        <option>sem1</option>
                                          <option>sem2</option>
                                          <option>sem3</option>
                                          <option>sem4</option>
                                          <option>sem5</option>
                                          <option>sem6</option>
                                          <option>sem7</option>
                                          <option>sem8</option>
                                    </select>
                           </div>
                      </div>
                          </div>
                          <div class="col-lg-6">
                             <div class="form-group">
                            <label for="Roll" class="col control-label">Grade</label>
                          <div class="col">
                               <input type="text" name="grade" placeholder="Enter Obtained CGPA/GPA" class="form-control" autofocus required>
                          </div>
                        </div>
                          </div>
                        </div>
                
                        
                        <br>
                         
                        
                        <input type="submit" name="submit" value="Update" class=" btn btn-success form-control">
                        <br><br>
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