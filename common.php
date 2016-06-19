<?php

session_start();








// Figure out which server we're on.  Localhost, or Dev, and connect to the DB
if($_SERVER['SERVER_NAME'] == "localhost") {
	$config['db'] = array(
		'host'      => 'localhost',
		'username'  => 'root',
		'password'  => 'root',
		'dbname'    => 'goarista_db'
	);

	$site_url = "http://danskinem.local:5757/";
}
else {
	$config['db'] = array(
		'host'      => 'localhost',
		'username'  => 'goarista_dbuser',
		'password'  => 't8SZdK}.5C!(',
		'dbname'    => 'goarista_db'
	);
	$site_url = "https://host.fotan.us/~goarista/";
}
$db = new PDO("mysql:host=". $config['db']['host'] .";dbname=". $config['db']['dbname'],
				  $config['db']['username'], $config['db']['password']);
$dbh = new PDO("mysql:host=". $config['db']['host'] .";dbname=". $config['db']['dbname'],
				  $config['db']['username'], $config['db']['password']);
	// EXCEPTIONS (Errors)
	//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if(!$db) { echo "<pre>"; print_r($db->errorInfo()); echo "</pre>"; }






// Encode all _GET vars to protect against script injection.
// Basically just takes all the GET variables and runs them through
// htmlspecialchars, then saves them back to the GET var.
foreach($_GET as $key => $value) {
	$safe_value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
	$_GET[$key] = $safe_value;
}
//-------------------------------------------------------------







// BACK TO WWW
// Find where we're at in the directory structure so we can create a good link to the photos for the header
// $www give the proper number of ../ to get back to the web root

$folder_depth = substr_count($_SERVER["REQUEST_URI"] , "/");
if($folder_depth == false) { $folder_depth = 1; }
$www = str_repeat("../", $folder_depth - 1); // REQUEST_URI outputs something like /program_updates/CTE/file.php
											 // -2 gets rid of the first / and the one before file.php
if($www == "") { $www = "./"; } // Added because all path variables have no / at the end.
								// Without the . anything with no ../ would be simply / and breaks.
// =============================================================================================

// Fix $www for the blog.  IF we're in the blog directory, it should ALWAYS be ../, no matter what the URL looks like
//if(substr_count($_SERVER["REQUEST_URI"], "/blog/") > 0) {
//	$www = "http://host.fotan.us/~goarista/";
//}


$_SESSION['www'] = $www;




// Icons
$home_icon = "<i class='glyphicon glyphicon-home'></i>";







/*
	FUNCTIONS
*/







// Display a partial string
// use: partialString($string, $length)
function partialString($string, $length) {
	return substr($string, 0, $length) ."...";
}



// Logos
function logo_ce() {
	echo "<img src='_logos/ce.jpg' class='logo_img' />";
}

function logo_intel() {
	echo "<img src='_logos/intel.jpg' class='logo_img' />";
}

function logo_winembedded() {
	echo "<img src='_logos/win_embedded.jpg' class='logo_img' />";
}

function logo_ul() {
	echo "<img src='_logos/ul.jpg' class='logo_img' />";
}

function logo_intouch() {
	echo "<img src='_logos/intouch.jpg' class='logo_img' />";
}

function logo_smartbattery() {
	echo "<img src='_logos/smart_battery.jpg' class='logo_img' />";
}

function logo_wifi() {
	echo "<img src='_logos/wifi.jpg' class='logo_img' />";
}

function logo_thinmanager() {
	echo "<img src='_logos/logo_thinmanager.jpg' class='logo_img' />";
}

function logo_swappablecpu() {
	echo "<img src='_logos/swappablecpu.jpg' class='logo_img' />";
}

function logo_auxvideo() {
	echo "<img src='_logos/auxvideo.jpg' class='logo_img' />";
}