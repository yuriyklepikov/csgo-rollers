<?php
session_start();	
include ('../steamauth/userInfo.php'); //To access the $steamprofile array  
?>
<?php
require '../steamauth/steamauth.php';
?>
<!doctype>
<html>
<head>
<title>CS:GO Rollers | Home</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/timer.js"></script>
<script src="js/main.js"></script>
<link rel="icon" type="image/png" href="img/poker-chip.png">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
<link href='css/body.css' rel='stylesheet' type='text/css'>
<link href='css/animate.css' rel='stylesheet' type='text/css'>
</head>
<body class="fadeIn animated">
	<div class="header">

		<div class="container">

			<div class="logo">
				<h1><a href="#">CSGO <span style="color:red;">ROLLERS</span></a></h1>
			</div>

			<div class="nav">
				<ul>
					<li><a href="http://csgorollers.com/">Home</a></li>
					<li><a href="http://csgorollers.com/about">About</a></li>
					<li><a href="http://csgorollers.com/howto">How to Play</a></li>
					<li><a style="font-weight:bold;">
					<?php
						if(empty($_SESSION['steamid'])) {
							steamlogin();
						} else {
							echo "".$_SESSION['steamid'].", ".$steamprofile['personaname']."";
							header('Location: index.php');
						}
					?>
					</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
<br /><br /><br /><br /><br />
<br /><br />
<div class="comingsoon">Website is currently under hard development, please check back later!</div>
<br /><br />
<br /><br />
<div class="footer">
	<p class="footertext">CS:GO Rollers is not affiliated with Valve Software &copy; 2015 CSGORollers.com</p>
</div>
</body>
</html>