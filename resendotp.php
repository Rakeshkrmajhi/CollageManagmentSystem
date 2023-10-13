<?php 

session_start();
include('conection.php');
$email= $_SESSION['email'];
$msg = "";
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
               
                $user_name = $DataRows['name'];     
                $user_email=$DataRows['email'];      
               
               }
        }


                $token = "1234567890";
				$token = str_shuffle($token);
				$token = substr($token, 0, 6);
					$sql="UPDATE `users` SET `token`='$token' WHERE id = $id";
					$Execute = mysqli_query($conn,$sql);
				// send email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				// More headers
				$headers .= 'From:Purulia Government Engineering College' . "\r\n";

				$subject = "Verify your email";
				//$message='include('email.php')';

				$message = '<p>Hi '.$user_name.',<br>Welcome To RKMGEC student Database System <br> Your OTP is <h1 style="font-size:50px;">'.$token.' </h1></p>';

				

				if ($Execute) {
					mail($user_email, $subject, $message, $headers);	

					   $_SESSION['email'] = $user_email;
					   $msg="";
					   $_SESSION['msg'] = $msg;
                    ?><script type="text/javascript"> window.open('verify.php','_self');
    </script></script><?php
			}
				else{ 
					$msg="Something wrong";
					$_SESSION['msg'] = $msg;
					?><script type="text/javascript"> window.open('verify.php','_self');
    </script></script><?php
				}


?>