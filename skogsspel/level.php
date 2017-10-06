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
			<header></header>

			<aside id="sidewindow">
				<div id="animals">
					<img src="img/gravling.png" alt="badger" id="dragMeBadger" class="Badger" draggable="true"
					ondragstart="begin(event)" data-animal= "badger">

					<img src="img/uggla.png" alt="owl" id="dragMeOwl" class="Owl" draggable="true"
					ondragstart="begin(event)" data-animal= "owl">

					<img src="img/ekorre.png" alt="squirrel" id="dragMeSquirrel" class="Squirrel" draggable="true"
					ondragstart="begin(event)" data-animal= "squirrel">

					<img src="img/kanin.png" alt="bunny" id="dragMeBunny" class="Bunny" draggable="true"
					ondragstart="begin(event)" data-animal= "bunny">

					<img src="img/rav.png" alt="fox" id="dragMeFox" class="Fox" draggable="true"
					ondragstart="begin(event)" data-animal= "fox">

					<img src="img/radjur.png" alt="deer" id="dragMeDeer" class="Deer" draggable="true"
					ondragstart="begin(event)" data-animal= "deer">
				</div>


				<input type="image" alt="play" src="img/play.png" id="play">
			</aside>

			<main>

				<div>
					<h2 id="chances">10</h2>
				</div>

				<input type="image" src="img/stjarnagul.png" alt="star" id="yellow1">
				<input type="image" src="img/stjarnagul.png" alt="star" id="yellow2">
				<input type="image" src="img/stjarnagul.png" alt="star" id="yellow3">
				<input type="image" src="img/stjarnagul.png" alt="star" id="yellow4">
				<input type="image" src="img/stjarnagul.png" alt="star" id="yellow5">
				<input type="image" src="img/stjarnagul.png" alt="star" id="yellow6">



					<img src="img/gravling_empty.png" alt="badger" id="dropHereBadger" class="Badger" 
					ondragover="over(event)"
					ondrop="drop(event)" data-animal="badger">

					<img src="img/uggla_empty.png" alt="owl" id="dropHereOwl" class="Owl"
					ondragover="over(event)"
					ondrop="drop2(event)" data-animal="owl">

					<img src="img/ekorre_empty.png" alt="squirrel" id="dropHereSquirrel" class="Squirrel"
					ondragover="over(event)"
					ondrop="drop3(event)" data-animal="squirrel">

					<img src="img/kanin_empty.png" alt="bunny" id="dropHereBunny" class="Bunny"
					ondragover="over(event)"
					ondrop="drop4(event)" data-animal="bunny">

					<img src="img/rav_empty.png" alt="fox" id="dropHereFox" class="Fox"
					ondragover="over(event)"
					ondrop="drop5(event)" data-animal="fox">

					<img src="img/radjur_empty.png" alt="deer" id="dropHereDeer" class="Deer"
					ondragover="over(event)"
					ondrop="drop6(event)" data-animal="deer">


				<img id="mushroom" alt="mushroom" src="img/svamp1.png">


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