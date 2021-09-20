<?php
    include('dbconfig.php');

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        
        $stmt = $db->prepare("SELECT email FROM users WHERE email = ?");
        $stmt->bind_param('s', $email);

        $stmt->execute();

        $stmt->bind_result($vemail);
        $stmt->store_result();
        $stmt->fetch();

        if ($vemail != "") {
            $emailinuse = true;
        }
        else {
            $emailinuse = false;
        }

        $db->close();
        $db = new mysqli($dbserver, $dbuser, $dbpassword, $dbname);
    }

    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    }
    else {
        $username = "";
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    else {
        $email = "";
    }   
    if (isset($_POST['password']) && isset($_POST['vpassword'])) {
        $password = $_POST['password'];
        $vpassword = $_POST['vpassword'];
    }
    else {
        $password = "";
        $vpassword = "";
    }
    if ($password == $vpassword) {
        $passwordsmatch = true;
        if ($password == "") {
            $nopassword = true;
        }
        else {
            $nopassword = false;
            $passwordhash = password_hash($password, PASSWORD_BCRYPT);
        }
    }
    else {
        $passwordsmatch = false;
    }
    if ($passwordsmatch == true && $nopassword == false && isset($_POST['username']) && isset($_POST['email']) && $emailinuse == false) {
        $error = false;
        $sql = "INSERT INTO users (username, email, password) VALUES (?,?,?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("sss", $_POST['username'], $_POST['email'], $passwordhash);
        $stmt->execute();
    }
    else {
        $error = true;
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

</head>
<body>
        <?php
            if ($error == false) {
                echo("<script>window.location.replace(" . '"' . "login.php" . '"' . ");</script>");
            }
            elseif ($email == "" && $username == "" && $password == "" && $vpassword == "") {
                echo("");
            }
            else {
                if ($passwordsmatch == false) {
                    echo("The passwords did not match, please reenter them");
                }
                elseif ($nopassword == true) {
                    echo("You must enter a password");
                }
                elseif ($emailinuse == true) {
                    echo("That e-mail is alredy in use");
                }
                elseif ($username == "") {
                    echo("You must enter a username");
                }
                elseif ($email == "") {
                    echo("You must enter a email");
                }
                else {
                    echo("An unknown error occured, please check the text boxes for any errors and try again.");
                }
            }
        ?>
<h1>Register Form</h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2>Register Form</h2>
			<form action="register.php" method="post">
				<div class="form-sub-w3">
					<input type="text" name="username" placeholder="Username " required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				</div>
                <div class="form-sub-w3">
                    <input type="email" name="email" placeholder="E-Mail" required="" />
                <div class="icon-w3">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </div>
                </div>
				<div class="form-sub-w3">
					<input type="password" name="password" placeholder="Password" required="" />
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
				</div>
                <div class="form-sub-w3">
                    <input type="password" name="vpassword" placeholder="Password" required="" />
                <div class="icon-w3">
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                </div>
                </div>
				
				<div class="submit-w3l">
                      <input type="submit" name="submit" value="Register">
                    </div>
			</form>
		</div>
<!--//form-ends-here-->
<!-- copyright -->
	<div class="copyright w3-agile">
		<p> © 2018 Login / Register Form | BloatedAlts</a></p>
	</div>
	<!-- //copyright --> 
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- pop-up-box -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
</body>
</html>