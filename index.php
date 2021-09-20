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
    <title>BloatedAlts</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="HTML by BabyxSparklez" />
	<meta name="keywords" content="alts" />
	<meta name="author" content="BabyxSparklez" />


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

	
	<!-- css -->
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/tempmo-style.css"> 
	<script src="js/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">             
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link href="css/landing-page.min.css" rel="stylesheet">

	</head>
	<body>
<?php
	if ($loggedin) {
		echo("Logged in as " . $usernamefromcookie . '. <a href="logout.php">Logout</a>');
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
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Bloated Alts</h1>
							<h2>Premium Alt Account Generator</h2>
							<p><a href="register.php" class="btn btn-default">Get Started</a></p>
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
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
						<h3>Unlimited Alts</h3>
						<p>Why pay for one alt when you can generate unlimitedly, with bloated alts you not only get high-quality alts, when you want it, but you also have the option to generate alt unlimitedly with no cap, no more paying for each alt, and having to buy more, simply purchase once and your set!</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
						<h3>Highly Dependable</h3>
						<p>Seriously our dependability is off the charts! Got a question? Just send us a message! You will get an answer in just seconds... (ok, ok, probably minutes, we have lives too.....or we are off playing video games...)</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-power"></i>
						</span>
						<h3>User Friendly</h3>
						<p>bloated alts makes generating alts easy! We take all the complicated work and make it simple for you guys :D because we don't want you sitting there wondering what to do next! We want you to be able to reach everything you need easily and smoothly!</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="gtco-features-2">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Why Choose Us</h2>
					<p></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3>We are cheap!</h3>
							<p>We try to keep our prices low so that you can receive a quality product without emptying your pockets</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3>Consistant Updates!</h3>
							<p>I have no life... bad news for me... good news for you :D I am here to please you all and update the generator!</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3>Highly Reliable!</h3>
							<p>We strive to be the most reliable alt generator out there, try it for yourself!</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3>We Care!</h3>
							<p>We care, most companies see dollar signs we see someone who is a part of our community here at bloated alts and we care about you as a individual, not just about your money</p>
						</div>
					</div>

				</div>

				<div class="col-md-6">
					<div class="gtco-video gtco-bg" style="background-image: url(images/img_1.jpg); ">
						<a href="" class="popup-vimeo"><i class="icon-video2"></i></a>
						<div class="overlay"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="gtco-started">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Get Started</h2>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-12">
					<form class="form-inline">
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="password" class="sr-only">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Password">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<button type="submit" class="btn btn-default btn-block">Sign Up</button>
						</div>
					<div>
						<br>
						<br>
						<br>
						<br>
					</div>
					</form>
				</div>
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
            <p class="text-muted small mb-4 mb-lg-0">&copy; BloatedAlts 2018</p>
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
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
        <script src="js/footerbootstrap.min.js"></script>         
        <script src="js/hero-slider-script.js"></script>      
        <script src="js/jquery.touchSwipe.min.js"></script>  
           

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

<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'b650815a-a67d-40e2-8dd4-42232188585a', f: true }); done = true; } }; })();</script>.

	</body>
<head>
<link rel="icon" href="images/grass.ico" type="image/ico">
</head>
</html>