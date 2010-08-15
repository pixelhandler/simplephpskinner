<?php

# extra for testing, debugging, etc
# die("ERROR on line:" . __line__);
error_reporting(E_ALL);
ini_set('display_errors','on');
# print_r($_SERVER);
# if (!session_id()) session_start();

# Globals
$root = $_SERVER['DOCUMENT_ROOT'];
$site = "My Site";
$url = $_SERVER['SERVER_NAME'];
$prod = "domain.com";
$local = "http://mysite.local:8888/";
$googleAnalytics = "XX-xxxxxxx-XX";

if (TRUE) { 
	// override for local work , use FALSE for prod. use
	$url = $local;
} else {
	// running in prod
	$url = $prod;
	if ($_SERVER['SERVER_NAME'] != $prod) {
		header( 'Location: ' . 'http://' . $prod . '/') ;
	}
}

# Class
require_once($root.'/includes/class_template.php');
?>