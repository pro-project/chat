<?php
    session_start();
    $s=$_SESSION['username'];
    $r=$_SESSION['rec'];
    $foo = $_POST['msg'];
    $chatid1=$_SESSION['chatid1'];
    $eb=$_POST['veb'];
    $host="localhost";
    $user="root";
    $pass="";
    $db_name="ghostbeta";
    $con=new mysqli($host,$user,$pass,$db_name);
    $query="INSERT INTO CHAT ( sender, message, receiver, chatid, status, eb) VALUES ( '$s', '$foo', '$r', '$chatid1', 'u', '$eb'); ";
    $run = $con->query($query);
    $ppp=0;
?>