<!-- This Code Needs to go at the top of every page -->
<?php
	include('varibles.php');
	if(!isset($_COOKIE[$cookie_name])) {
		$loggedin = false;
	}
	else {
		$loggedin = true;
		$usernamefromcookie = $_COOKIE[$cookie_name];
	}
?>
<!-- This code goes where you want the logged in/ not logged in indicator to go (again you can put HTML in the echo statements (i sujest put the login butto in the not logged in area and style the loug out button)) -->
<?php
	if ($loggedin) {
		echo("Logged in as " . $usernamefromcookie . '. <a href="logout.php">Logout</a>');
	}
	else {
		echo("Logged Out.");
	}
?>