<?php


$url = $_SERVER['REQUEST_URI'];

$strings = explode('/', $url); /*hämtar hela url men delar upp och hämtar bara uri ex contact.php*/

$current_page = end($strings);

$dbname = 'ProjectGame';
$dbuser = 'root';
$dbpass = 'password';
$dbserver = 'localhost';



?>