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
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<div id="sitecontainer">



<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

#this function is for older PHP versions that use Magic Quotes.
#
//    function escapestring($input) {
//    if (get_magic_quotes_gpc()) {
//    $input = stripslashes($input);
//    }
//
//    @ $db = new mysqli('localhost', 'root', '', 'testinguser');
//
//
//    return mysqli_real_escape_string($db, $input);
//
//    }

@ $db = new mysqli('localhost', 'root', 'password', 'ProjectGame');

if ($db->connect_error) {
    echo "could not connect: " . $db->connect_error;
    printf("<br><a href=index.php>Return to home page </a>");
    exit();
}

    #the mysqli_real_espace_string function helps us solve the SQL Injection
    #it adds forward-slashes in front of chars that we can't store in the username/pass
    #in order to excecute a SQL Injection you need to use a ' (apostrophe)
    #Basically we want to output something like \' in front, so it is ignored by code and processed as text

if (isset($_POST['username'], $_POST['password'])) {
    #with statement under we're making it SQL Injection-proof
    $uname = mysqli_real_escape_string($db, $_POST['username']);
    
    #without function, so here you can try to implement the SQL injection
    #various types to do it, either add ' -- to the end of a username, which will comment out
    #or simply use 
    #' OR '1'='1' #
    #$uname = $_POST['username'];
    
    #here we hash the password, and we want to have it hashed in the database as well
    #optimally when you create a user (through code) you simply send a hash
    #hasing can be done using different methods, MD5, SHA1 etc.
    
    $upass = sha1($_POST['password']);
    
    #just to see what we are selecting, and we can use it to test in phpmyadmin/heidisql
    
    echo "SELECT * FROM Player WHERE username = '{$uname}' AND password = '{$upass}'";
    
    $query = ("SELECT * FROM Player WHERE username = '{$uname}' "."AND password = '{$upass}'");
       
    
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->store_result(); 
    
    #here we create a new variable 'totalcount' just to check if there's at least
    #one user with the right combination. If there is, we later on print out "access granted"
    $totalcount = $stmt->num_rows();
    
    
    
}
        
        
        
        if (isset($totalcount)) {
            if ($totalcount == 0) {
                echo '<h2>You got it wrong. Can\'t break in here!</h2>';
            } else {
                echo '<h2>Welcome! Correct password.</h2>';
            }
        }
        ?>
       <div id="startpage">
				<div id="formbackground">
					<h1>Hello friend!</h1>
					<form name="form">
						<p>USERNAME</p><input type="text" name="username" onKeyup="checkform()" id="name">
						<p>PASSWORD</p><input type="password" name="password" onKeyup="checkform()" id="password"><br>
						<input type="button" value="START PLAYING" id="spela" onclick="window.location.href= 'level_forest.php'"> 
					</form>
					<div id="createuser">
					<input type="button" name="submit" value="NOT A FRIEND YET?" id="create" onclick="window.location.href= 'create_user.php'"> 
					</div>
				</div>
			</div>


    </body>
</html>


			</main>
		</div>

		<script src="js/script.js"></script>
		<img src="img/turndevice.png" alt="mobile" id="warning">
	</body>

</html>