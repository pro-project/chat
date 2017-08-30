<!DOCTYPE html>
<html>
<?php session_start();?>
<head>
	<title>Chat Lobby</title>
	<link rel="stylesheet" type="text/css" href="css/homecss.css">
	<script src="js/home.js"></script>    
        <script>
            setInterval(function(){ajax()}, 800);
            function myFunction(ff) {
            	closeNotif();
            	document.getElementById(ff.name).click(); // Click on the checkbox
            }
    </script> 
</head>
<body onload="ajax();">
	<div id="mySidenav" class="sidenav">
		<div>
			<div id="myCountry">
				<div id="myCountryDp">
					<img style='height: 6vh ; width: 10vh' src="res/ic_notifications_active.png">
				</div>
				<div id="myCountryName">
					<div id="enterSenderNameHere"><?php echo $_SESSION['username'];?></div>
				</div>
			</div>
			<hr>
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		</div>
		<a href=".\gsl.html">General Speaker List</a>
		<a href=".\moderated_caucus.html">Moderated Caucus</a>
		<a href=".\resources.html">Resources</a>
		<a href="logout.php">Logout</a>
	</div>
	<div id="myNotifications" class="sidenav">
		<div>
			<p>Notifications</p>
			<hr>
			<div id='notification'></div>
			<a href="javascript:void(0)" class="closebtn" onclick="closeNotif()">&times;</a>
		</div>
	</div>
	<div id="navigationPane">
		<div id="tab1">
			<div id="hamburger">
				<img style='height: 4vh ; width: 4vh' onclick="openNav()" src="res/ic_menu.png" title="Options">
			</div>
			<div id="notificationIcon">
				<img style='height: 4vh ; width: 4vh' onclick="openNotif()" src="res/ic_notifications.png" title="Notifications">
			</div>
			<div id="countrylist">
				<img style='height: 4vh ; width: 4vh' src="res/ic_chat.png" title="Country List">
			</div>
		</div>
		<div id="countrylistArea" >

		</div>
        		<div id="countrylistArea2" >

		</div>
	</div>
	<div id="messagePane">
		<div id="tab2">
			<div id="countryDp">
				<img style='height: 6vh ; width: 10vh' src="res/ic_notifications_active.png">
			</div>
			<div id="countryName">
				<div id="enterRecieverNameHere">Receiver name</div>
			</div>
		</div>
		<div id="messagesArea">
		All of my messages come here! This scrolls too!
		</div>
		<div id="inputArea">
			<textarea id="msg" placeholder="Enter your message here."></textarea>
			<div id="sendOptions">
				<div id="viaEbOption"><input type="checkbox" name="viaEb" id="veb">Via EB</div>
				<img id="sendit" src="res/ic_send.png" title="Send" onclick='sub()'>
			</div>
		</div>
	</div>
	<script language="JavaScript" src="js/homeui.js"></script>
</body>
</html>