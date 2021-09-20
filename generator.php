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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generator</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">       
    <link rel="stylesheet" href="css/bootstrapgen.min.css">                            
    <link rel="stylesheet" href="css/hero-slider-style.css">                                               
    <link rel="stylesheet" href="css/tempmo-style.css">  
    <link rel="stylesheet" href="css/generator.css">  
    <link rel="stylesheet" href="css/style.css">
    
    <meta charset="UTF-8">
    <title>Account generator</title>
    <link rel="stylesheet" href="quote.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <script src="jquery-1.11.2.min.js" type="text/javascript"></script>
</head>
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            <div class="row">
                <div class="col-xs-2">
                    <div id="gtco-discord"><a href="https://discord.gg/MCzS7KG" style="background-image:url(images/discord-logo.png);"></a></div>
             </p>
                </div>
                <div class="col-xs-8 text-center menu-1">
                </div>
                <div class="col-xs-2 text-right hidden-xs menu-2">
                    <ul>
                        <li class="btn-cta"><a href="index.php"><span>back</span></a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </nav>

    <body>
    <?php
	if ($loggedin) {
		echo("Logged in as " . $usernamefromcookie . '. <a href="logout.php" style="z-index: 5;">Logout</a>');
	}
	else {
		echo("Logged Out.");
	}
?>
        <section class="cd-hero">
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
            <ul class="cd-hero-slider autoplay">  
          
                <li class="selected">
                    <div class="cd-full-width">
                        <div class="tm-slide-content-div">
                            <form action="index.php" id="search-form">
                                <i class="fa fa-cogs tm-slide-icon"></i>
                                <h2 class="text-uppercase">Account Generator</h2>
                                <p class="m-b-mid"></p>
                                <div class="form-group">
                                  
                                <div id="quoteContainer">
                               <p></p>      
                               </div><!--end quoteContainer-->
            
                              </div>                                
                              <div id="container">

            <div id="buttonContainer">
                <a href="#" id="quoteButton">Generate Now</a>
        </div><!--end buttonContainer-->
                            </form>                            
                        </div>                        
                    </div> 
                </li>

            <div class="cd-slider-nav">
                <nav>
                    <span class="cd-marker item-1"></span>
                </nav> 
            </div> <!-- .cd-slider-nav -->
        </section> <!-- .cd-hero -->

        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/hero-slider-script.js"></script>
        <script src="js/jquery.touchSwipe.min.js"></script>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script  src="js/generator.js"></script>

</body>
</html>