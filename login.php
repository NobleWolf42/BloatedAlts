<?php
    include('dbconfig.php');
    
    $vemail = "";
    $hash = "";

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        
        $stmt = $db->prepare("SELECT email, password, username FROM users WHERE email = ?");
        $stmt->bind_param('s', $email);

        $stmt->execute();

        $stmt->bind_result($vemail, $hash, $username);
        $stmt->store_result();
        $stmt->fetch();
    }
    else {
        $email = "";
    }   
    
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }
    else {
        $password = "";
    }
    
    if (password_verify($password, $hash)) {
        $passwordsmatch = true;
    }
    else {
        $passwordsmatch = false;
    }
    
    if ($passwordsmatch == true && isset($_POST['email'])) {
        $error = false;
        $cookie_value = $username;
        setcookie($cookie_name, $cookie_value, time() + ($logintime), "/");
    }
    else {
        $error = true;
    }
?>

<DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/utillogin.css">
	<link rel="stylesheet" type="text/css" href="css/mainlogin.css">
	<link rel="stylesheet" type="text/css" href="css/backanim.css">
</head>
<body>

        <?php
            if ($error == false) {
                echo("<script>window.location.replace(" . '"' . "index.php" . '"' . ");</script>");
            }
            elseif ($email == "" && $password == "") {
                echo("");
            }
            else {
                if ($passwordsmatch == false) {
                    echo("The password was incorrect");
                }
                elseif ($nopassword == true) {
                    echo("You must enter a password");
                }
                elseif ($email == "") {
                    echo("You must enter a email");
                }
                else {
                    echo("An unknown error occured, please check the text boxes for any errors and try again.");
                }
            }
        ?>


<style type="text/css">

	body {
	width: 100wh;
	height: 90vh;
	color: #fff;
	background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
	background-size: 400% 400%;
	-webkit-animation: Gradient 14s ease infinite;
	-moz-animation: Gradient 14s ease infinite;
	animation: Gradient 14s ease infinite;
}

@-webkit-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@-moz-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

</style>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/login-01.png" alt="IMG">
				</div>

				<form action="login.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input type = "submit" value = "submit" class="login100-form-btn"/>
							Login
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>