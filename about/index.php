<?php
session_start(); 
?>
<!doctype>
<html>
<head>
<title>CS:GO Rollers | About</title>
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
					<li><a>
						<?php
								echo "".$_SESSION['steamid']."";
						?>
					</a></li>
				</ul>
			</div>
		</div>
	</div>
<br /><br /><br /><br /><br /><br />
<div class="container2">
	<p class="title-about">What is CSGO Rollers?</p>
	<br />
		<ul class="block">
			<br />
			<ol>CSGO Rollers is a website made by gamers, for gamers.</ol>
			<ol>We at CSGO Rollers, have a goal. The goal is to achieve a successful and functional website.</ol>
			<ol>We are an active development team which bring daily and new updates everyday.</ol>
			<ol>If you're willing to donate to us, please do!</ol>
			<ol>At CSGO Rollers, we take up to 6% of each prize pool.</ol>
		</ul>
	</div>
</div>
<br /><br />
<div class="footer">
	<p class="footertext">CS:GO Rollers is not affiliated with Valve Software &copy; 2015 CSGORollers.com</p>
</div>
</body>
</html>