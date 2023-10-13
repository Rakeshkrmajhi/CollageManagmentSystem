<?php
    $key=$_GET['id'];
      include('dbcon.php');
                   

                      //  if (isset($_POST['delbtn'])) {

      //  $key = $conn->real_escape_string($_POST['keytodelete']);


                   echo $key;

                       
       $sql = "DELETE FROM `users` WHERE `id`= $key";

        $run  = mysqli_query($conn, $sql);

       if($run){

        echo "success!!";

       }
       else{
        echo "unsuccess__";
       }
                      
                    ?>