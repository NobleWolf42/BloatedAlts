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
<!DOCTYPE html>
<html>
	<head>
    	<title>Login</title>
	</head>
	<body>
        <!-- The following PHP produces various errors such as passwords not matching, place it wherever you would like it. Also feel free to format the text in the echo statments with HTML. The stuff in the quotes in the echo statement will print out as HTML. i.e. the PHP statement (ignoring the ~) ~echo("<a href=http://www.google.com>Google</a>");~ would be (again ignoring the ~) ~<a href=http://www.google.com>Google</a>~ in HTML -->
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
    	<form method="post" action="login.php"> 
    		<label id="first">E-Mail</label><br/>
    		<input type="email" name="email"><br/>

    		<label id="first">Password</label><br/>
    		<input type="password" name="password"><br/>

    		<button type="submit" name="submit">Submit</button>
    	</form>
	</body>
</html>