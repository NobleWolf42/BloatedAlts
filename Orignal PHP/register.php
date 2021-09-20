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
	</head>
	<body>
        <!-- The following PHP produces various errors such as passwords not matching, place it wherever you would like it. Also feel free to format the text in the echo statments with HTML. The stuff in the quotes in the echo statement will print out as HTML. i.e. the PHP statement echo("<a href=http://www.google.com>Google</a>"); would be <a href=http://www.google.com>Google</a> in HTML -->
        <?php
            if ($error == false) {
                echo("<script>window.location.replace(" . '"' . "newregisterwelcome.php" . '"' . ");</script>");
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
    	<form method="post" action="register.php"> 
    		<label id="first">Username</label><br/>
    		<input type="text" name="username"><br/>

    		<label id="first">E-Mail</label><br/>
    		<input type="email" name="email"><br/>

    		<label id="first">Password</label><br/>
    		<input type="password" name="password"><br/>

    		<label id="first">Verify Password</label><br/>
    		<input type="password" name="vpassword"><br/>

    		<button type="submit" name="submit">Submit</button>
    	</form>
	</body>
</html>