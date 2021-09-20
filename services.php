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
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
    <meta name="author" content="BabyxSparklez" />
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/style.css">
  <link href="css/landing-page.min.css" rel="stylesheet">
  <link href="css/landing-page.css" rel="stylesheet">
	<script src="js/modernizr-2.6.2.min.js"></script>
  

	</head>
	<body>
  <?php
	if ($loggedin) {
		echo("Logged in as " . $usernamefromcookie . '. <a href="logout.php" style="z-index: 5;">Logout</a>');
	}
	else {
		echo("Logged Out.");
	}
?>
  <div class="gtco-loader"></div>
  
  <div id="page">
  <nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
      <div class="row">
        <div class="col-xs-2">
          <div id="gtco-discord"><a href="https://discord.gg/MCzS7KG" style="background-image:url(images/discord-logo.png);"></a></div>
                     <p>
                    <div id="DiscordTab">
                </div>
                </p>
        </div>
        <div class="col-xs-8 text-center menu-1">
          <ul>
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="generator.php">Generator</a></li>
            <li><a href="register.php">Register</a></li>
              <li><a href="services.php">Plans</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <div class="col-xs-2 text-right hidden-xs menu-2">
          <ul>
            <li class="btn-cta"><a href="login.php"><span>Login</span></a></li>
          </ul>
        </div>
      </div>
      
    </div>
  </nav>
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(images/plans-bg.jpg);">

		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Our Plans & Services</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
  </header>
  <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		</div>
	</div>
<div>
<p>
<br>
</p>
</div>
<div id="price">
  <!--price tab-->
  <link rel="stylesheet" href="css/plans.css">
  <div class="plan">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>Simple Alts</h3>
        <div class="price">$2<span>/Month</span>
        </div>
      </div>
      <div class="entry-content">
        <ul>
          <li><strong>25x Accounts Gen /Month</strong></li>
          <li><strong>Free Updates</strong></li>
          <li><strong>Basic Support</strong></li>
          <li><strong>Basic Database</strong></li>
          <li><strong>Unchecked Alts</strong></li>
          <li><strong>1 Favorite Slot</strong></li>
          <li><strong>10m Gen Cooldown</strong></li>
        </ul>
      </div>
      <div class="btn">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="87F725LLRP8CE">
<input type="image" src="https://dailythebook.files.wordpress.com/2017/05/paypal-checkout-button3.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
  <div class="plan basic">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>Amazing Alts</h3>
        <div class="price">$5<span>/Month</span>
        </div>
      </div>
      <div class="entry-content">
        <ul>
          <li><strong>200x Accounts Gen /Month</strong></li>
          <li><strong>Free Updates</strong></li>
          <li><strong>Basic Support</strong></li>
          <li><strong>Basic Database</strong></li>
          <li><strong>Unchecked Alts</strong></li>
          <li><strong>3 Favorite Slots</strong></li>
          <li><strong>5m Gen Cooldown</strong></li>
        </ul>
      </div>
      <div class="btn">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6D2B8FV6U7FML">
<input type="image" src="https://dailythebook.files.wordpress.com/2017/05/paypal-checkout-button3.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
  <div class="plan standard">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>Super Alts</h3>
        <div class="price">$10
        <span>/Month</span>
        </div>
      </div>
      <div class="entry-content">
        <ul>
          <li><strong>500x Accounts Gen /Month</strong></li>
          <li><strong>Free Updates</strong></li>
          <li><strong>24/7 Support</strong></li>
          <li><strong>Premium Database</strong></li>
          <li><strong>Verified Unbanned</strong></li>
          <li><strong>10 Favorite Slots</strong></li>
          <li><strong>3m Gen Cooldown</strong></li>
        </ul>
      </div>
      <div class="btn">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="RCMNHCNVBUJVA">
<input type="image" src="https://dailythebook.files.wordpress.com/2017/05/paypal-checkout-button3.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
  <div class="plan ultimite">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>Ultimate Alts</h3>
        <div class="price">$15<span>/Month</span>
        </div>
      </div>
      <div class="entry-content">
        <ul>
          <li><strong>750x Accounts Gen /Month</strong></li>
          <li><strong>Free Updates</strong></li>
          <li><strong>24/7 Support</strong></li>
          <li><strong>Premium Database</strong></li>
          <li><strong>Verified Unbanned</strong></li>
          <li><strong>20 Favorite Slots</strong></li>
          <li><strong>1m Gen Cooldown</strong></li>
        </ul>
      </div>
      <div class="btn">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="YEXE6HHT6U98L">
<input type="image" src="https://dailythebook.files.wordpress.com/2017/05/paypal-checkout-button3.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <div class="plan epic">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>Epic Alts</h3>
        <div class="price">$30<span>/Month</span>
        </div>
      </div>
      <div class="entry-content">
        <ul>
          <li><strong>Unlimited Accounts Gen /Month</strong></li>
          <li><strong>Free Updates</strong></li>
          <li><strong>24/7 Support</strong></li>
          <li><strong>Premium Database</strong></li>
          <li><strong>Verified Unbanned</strong></li>
          <li><strong>30 Favorite Slots</strong></li>
          <li><strong>1m Gen Cooldown</strong></li>
        </ul>
      </div>
      <div class="btn">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="J8G2JJNAGV67L">
<input type="image" src="https://dailythebook.files.wordpress.com/2017/05/paypal-checkout-button3.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>
      </div>
    </div>
  </div>
    <!-- Beginning of footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of use</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; BloatedAlts 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-discord"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	</body>
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

</style>
</body>
</html>

