<?php
	include("varibles.php");
	$db = new mysqli($dbserver, $dbuser, $dbpassword, $dbname);
	if (!$db) {
    	die("Connection failed: " . mysqli_connect_error());
	}
?>