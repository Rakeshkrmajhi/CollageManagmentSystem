<?php
    $key=$_GET['id'];
      include('dbcon.php');
                   

                      //  if (isset($_POST['delbtn'])) {

      //  $key = $conn->real_escape_string($_POST['keytodelete']);


                   //echo $key;

                       
       $sql = "UPDATE `users` SET`is_confirmed`=3 WHERE `id`= $key";

        $run  = mysqli_query($conn, $sql);

       if($run){?>

         <script type="text/javascript"> window.open('admindash.php','_self');
                        </script><?php

       }
       else{
        echo "unsuccess__";
       }
                      
                    ?>