			<?php
   session_start();

	            $myusername=1;
                $current=$_SESSION['username'];
	            $host="localhost";
	            $user="root";
	            $pass="";
	            $db_name="ghostbeta";
	            $con=new mysqli($host,$user,$pass,$db_name);
	            $qry = "SELECT username FROM blogin WHERE  (status = '$myusername')";
	            $res = mysqli_query($con, $qry);
	            if(mysqli_num_rows($res)>0){

	                while($row0=mysqli_fetch_assoc($res)){ ?>
                        <html>
                            <body>
                <div id="list">

                
                <?php
                        $ans=strcmp($current,$row0['username']);
                        #echo $ans . $current;
                        #echo "<br>";

                        if($ans!=0 )
                        { ?>
	                    <input class='countries_l' type='submit' value='<?php echo $row0['username']; ?>' id='<?php echo $row0['username'];?>' onclick='post(this.value)'>
	                   <br>
                         

                       <?php }
	                }
                    ?>
                     </div>
                            </body> 
	            
              <?php  }  
                            
                      #code for last message comes here       
                            
                            
                ?>
                


</html>