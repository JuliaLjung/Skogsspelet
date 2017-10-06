<!DOCTYPE html>
<?php
include("config.php");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Skogsspel</title>
		<meta name="apple-mobile-web-app-title" content="">
		<meta name="application-name" content="">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Quicksand" rel="stylesheet">

		<link rel="apple-touch-icon" sizes="60x60" href="img/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="img/android-chrome-192x192.png" sizes="128x128">
		<link rel="icon" type="image/png" href="img/android-chrome-192x192.png" sizes="192x192">
		
		<script type="text/javascript" src="js/mobile.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
	</head>
	<body>
		<div id="sitecontainer">
		<main>
		
			<div id="endpage">
				<div id="formbackground2">

					<input type="image" src="img/stjarnagul.png" alt="star" id="star1">
					<input type="image" src="img/stjarnagul.png" alt="star" id="star2">
					<input type="image" src="img/stjarnagul.png" alt="star" id="star3">
					<input type="image" src="img/stjarnagul.png" alt="star" id="star4">
					<input type="image" src="img/stjarnagul.png" alt="star" id="star5">
					<input type="image" src="img/stjarnagul.png" alt="star" id="star6">

					<h2 id="getName"></h2>

					<input type="button" value="SPELA IGEN" onclick="playAgain()" class="btn">
					<input type="button" value="BYT SPELARE" onclick="changePlayer()" class="btn">				
				</div>
			</div>


			</main>
		</div>

		<audio id="ping" src="ping.mp3"></audio>
		<audio id="error" src="Mario.mp3"></audio>
		<audio id="myAudio" src="skogsmusik.mp3" autoplay loop></audio>
		<script></script>

		<script src="js/script.js"></script>
		<img src="img/turndevice.png" alt="mobile" id="warning">
	</body>

</html>