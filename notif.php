<?php
    session_start();
    $sen=$_SESSION['username'];
    $host="localhost";
    $user="root";
    $pass="";
    $db_name="ghostbeta";
    $con=new mysqli($host,$user,$pass,$db_name);
    $query="SELECT DISTINCT sender FROM chat WHERE receiver='$sen' and status='u'";
    $run=$con->query($query);
    while($row=$run->fetch_array() ) :

?>
<html>
    <body>
        <div id="notifbar">
                    <?php
                    if ( $row['sender'] != $_SESSION['rec'])
                    {
                        ?>
                        <button  name="<?php echo $row['sender']?>" onclick="myFunction(this)" > You have a new message(s) from 
                        <?php echo $row['sender'] ?> </button>
                        <br>
                        <?php
                    }
                    else
                    {
                        $q2="UPDATE chat SET status='r' WHERE status='u' and sender='".$_SESSION['rec']."' and receiver='".$_SESSION['username']."'";
                        $run2=$con->query($q2);
                    }
                
            ?>
</div>
</body>
   
<?php endwhile;?>