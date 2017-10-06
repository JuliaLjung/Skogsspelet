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


			<div id="startpage">
				<div id="formbackground">
					<h1>Hello friend!</h1>
					<form name="form">
						<p>USERNAME</p><input type="text" onKeyup="checkform()" id="name">
						<p>PASSWORD</p><input type="password" onKeyup="checkform()" id="password"><br>
						<p>AGE</p><input type="number" onKeyup="checkform()" id="age"><br>
						<input type="button" value="CREATE USER" id="spela" disabled="disabled" onclick="window.location.href= 'level_forest.php'"> 
					</form>
				</div>
			</div>


			</main>
		</div>

		<script src="js/script.js"></script>
		<img src="img/turndevice.png" alt="mobile" id="warning">
	</body>

</html>