<?php
	include('varibles.php');
	$cookie_value = "";
	setcookie($cookie_name, $cookie_value, time() + (0), "/");
?>
<script>window.location.replace("index.php");</script>