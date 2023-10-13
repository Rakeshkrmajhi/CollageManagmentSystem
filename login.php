<?php 
session_start();
error_reporting(0);
include'conection.php';

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
                <a href="#"><i class="fa fa-sign-in"></i></i></a>
            </div>
            <ul class="main-menu">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="department.php">Department</a></li>
                <li><a href="#">Admission</a></li>
                <li><a href="faci.php">Facilities</a></li>
                 <li><a href="placement1.php">Placement</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

        </div>
    </nav> 
    <!-- Header section end -->
<div  class="main" style="background:url(images/loginbg.jpg);background-size:cover; background-repeat: repeat;">
<br>
    
        <form  action="" method="post" class="form-control w-25 m-auto p-10" style="background-color:  black;opacity: 0.7;" >
            <p class="form-header text-center" style="font-size: 15px; color: white;"> Login </p>
            <hr style="color: white;">
            <hr class="h-2">
            
                <label class="form-group" style="color:white;"> Username</label>
                <input type="email" name="username" placeholder="Enter Your Usename" class="form-control" required>

            
            <br>
                <label class="form-group" style="color:white;"> Password</label>
                <input type="password" name="password" placeholder="Enter Your password" class="form-control" required>

    
            <br>
                <input type="submit" name="login" value="Login" class="btn btn-success form-control">
             
                <p class="form-group text-center">New User?<a href="newuser.php">Click Here</a></p>
        
        </form>
    


<br>

    
    <br>
</div>


    


    <!-- Footer section -->
    <footer class="footer-section fixed-bottom">
        
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
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>
<?php
    include ('Conection.php');

    if (isset($_POST['login'])) {

        $user = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);
        $password = md5($password);

        $qry = "SELECT * FROM `users` WHERE email='$user' AND password='$password'";
        
        $run  = mysqli_query($conn, $qry);

       $row = mysqli_num_rows($run);

        if($row > 0) {
         $data = mysqli_fetch_assoc($run);
                    $id= $data['id'];
                    $confirm=$data['is_confirmed'];
                   
                    if($confirm==0){
                        $_SESSION['email'] = $user;
                        ?><script type="text/javascript"> window.open('resendotp.php','_self');
                        </script></script><?php
                    }
                    elseif ($confirm == 1) {
                        $_SESSION['email'] = $user;
                         ?><script type="text/javascript"> window.open('signup.php','_self');
                        </script></script><?php
                        # code...
                    }
                    else{
                         $_SESSION['id'] = $id;
                         ?><script type="text/javascript"> window.open('profile.php','_self');
                        </script></script><?php
                    }
                  

           
        } else {
      ?>             
    <script>
        alert('username or passoword invalid');
        window.open('login.php','_self');
    </script>
    <?php
                   
                }

}
?>