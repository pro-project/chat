			<?php
   session_start();

	            $myusername=1;
                $current=$_SESSION['username'];
                $st=$_SESSION['status'];
	            $host="localhost";
	            $user="root";
	            $pass="";
	            $db_name="ghostbeta";
	            $con=new mysqli($host,$user,$pass,$db_name);
	            $qry = "SELECT sender FROM chat WHERE  (receiver = '$current')";
	            $res = mysqli_query($con, $qry);
	            if(mysqli_num_rows($res)>0){
                    $temp=strcmp("book",$st);
                            if($temp==0){
	                while($row0=mysqli_fetch_assoc($res)){ 
                                                                            #echo "This script is running bitch";

?>
                        <html>
                            <body>
                <div id="list2">

	                    <input class='countries_l' type='submit' value='<?php echo $row0['sender']; ?>' id='<?php echo $row0['sender'];?>' onclick='post(this.value)'>
	                   <br>
                         

                       <?php 
	                }
                    ?>
                     </div>
                            </body> 
	            
              <?php  } }        	       ?>
                


</html>