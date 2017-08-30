<?php
   session_start();
    $foo=$_SESSION['username'];
    $host="localhost";
    $user="root";
    $pass="";
    $db_name="ghostbeta";
    $con=new mysqli($host,$user,$pass,$db_name);
    $q="UPDATE blogin SET status=0 WHERE username='$foo'";
                        $st=$_SESSION['status'];
 $temp=strcmp("readbook",$st);
                            
    $run = $con->query($q);
  
      if($temp==0)
      {
          
      header("Location: finish.html");
      }
      else
      {
                // destroy the session
                session_destroy(); 
                header("Location: index.html");

      }
  
?>

