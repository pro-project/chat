<?php
    session_start();
    $db = mysqli_connect("localhost","root","","ghostbeta");
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $myuser = mysqli_real_escape_string($db,$_POST['nick']);
    $foo=0;
    $host="localhost";
    $user="root";
    $pass="";
    $db_name="ghostbeta";
    $con=new mysqli($host,$user,$pass,$db_name);

          $query="INSERT INTO RLOGIN ( username , position ) VALUES ( '$myuser', '$foo'); ";
            $run = $con->query($query);
            $_SESSION["status"]="readbook";

        $_SESSION["username"]="$myuser";
            header("location: home.php");
        }
    
    mysqli_close($db);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Chat Login</title>
        <link rel="stylesheet" href="css/countlog.css">
    </head>
    <body>
        <div id="conlog" class="logo" align="center">
            <img id="logo" src="Hed.png" style="width:30vh; height:30vh">
            <form action="" method="post"><br><br>
                <div class="container">

                    <!--label style="padding-right:0.8vw;"><b>Country</b></label-->
                    <input type="text" placeholder="Enter your Nickname" name="nick" required><br><br><br>
                    <!--label><b>Password</b></labelp-->
                    <button type="submit" >Login</button><br><br>
                    <br><br>
                </div>
            </form>
        </div>
    </body>
</html>