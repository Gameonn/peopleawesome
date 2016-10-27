<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- PAGE TITLE -->
    <title>Home - CheckthisOut</title>
    <!-- MAKE IT RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    
    <!-- FAVICON -->	
	<!--<link rel="shortcut icon" href="images/favicon.png" />-->
    <!-- STYLESHEETS -->
    <link href="{{ URL::to('/') }}/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="{{ URL::to('/') }}/assets/css/animate.min.css" rel="stylesheet" media="screen">
    <link href="{{ URL::to('/') }}/assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="{{ URL::to('/') }}/assets/style.css" rel="stylesheet" media="screen">
    <link href="{{ URL::to('/') }}/assets/css/options.css" rel="stylesheet" media="screen">
    <link href="{{ URL::to('/') }}/assets/css/responsive.css" rel="stylesheet" media="screen">
    <link href="{{ URL::to('/') }}/assets/css/mystyle.css" rel="stylesheet" media="screen">

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
    <link href="//db.onlinewebfonts.com/c/a4ac01ca80651d6bacb1aea3c78d94b4?family=Old+Stamper" rel="stylesheet" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Raleway:900,300,400,200,800' rel='stylesheet' type='text/css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>   
   
  </head>
  <!-- START BODY -->

  <body class="bg-home2">
  
  	<!-- LOADER DIV - ONLY HOME -->
  	<div id="loader">
  		<div id="loading-logo"></div>
  	</div>
  	<div id="page">

	  <div class="img-header align-center">
		<img src="{{ URL::to('/') }}/assets/images/logo-fixed-menu.png">
	  </div>

	  <!-- START HEADER -->
	  	<header id="header" class="big">
	  		<!-- POINTER ANIMATED -->
	  		<canvas id="header-canvas"></canvas>
	  		
	  		<!-- MOBILE NAVIGATION -->
	  		<nav id="navigation-mobile"></nav>
	  	
	  		<!-- MAIN MENU -->
	  		<nav id="navigation">
	  			<!-- DISPLAY MOBILE MENU -->
	  			<a href="#" id="show-mobile-menu"><i class="fa fa-bars"></i></a>
	  			<!-- CLOSE MOBILE MENU -->
		  		<a href="#" id="close-navigation-mobile"><i class="fa fa-long-arrow-left"></i></a>
	  			
		  		<ul id="left-navigation" class="animate-me fadeInLeftBig">
			  		<li class="menu-item menu-item-has-children">
			  			<a href="{{ URL::to('/') }}/home" data-description="All starts here">Home</a>
			  		</li>
			  		<li class="menu-item menu-item-has-children">
			  			<a href="{{ URL::to('/') }}/about-us" data-description="What we do">About Us</a>
			  		</li>
		  		</ul>
		  		<div  class="animate-me flipInX" data-wow-duration="3s">
		  			<a href="{{ URL::to('/') }}/home" id="logo-navigation">
		  				<span>We're the future !</span>
		  			</a>
		  		</div>
		  		<ul id="right-navigation" class="animate-me fadeInRightBig">
			  		<li class="menu-item"><a href="{{ URL::to('/') }}/faq" data-description="Terms">Terms & Conditions</a></li>
			  		<li class="menu-item"><a href="{{ URL::to('/') }}/contact-us" data-description="Let's get in touch">Contact</a></li>
		  		</ul>
	  		</nav>
	  		
	  		<!-- TEXT SLIDER -->
			<div id="ticker" class="animate-me zoomIn">
				<!-- <h4 class="with-breaker">Why choose us ?</h4> -->
				<div id="ticker-text">
					<ul>
						<li>Our work is our passion</li>
						<li>We're ready to hear you</li>
						<li>Our work is all about quality</li>
						<li>We're always at the top</li>
						<li>We care about you</li>
						<li>We're French & proud !</li>
						<li>We're dynamic !</li>
					</ul>
				</div>
			</div>  		
	  		
	  		<!-- SCROLL BOTTOM -->
	  		<div id="scroll-bottom" class="animate-me fadeInUpBig">
		  		<a href="#"><i class="fa fa-angle-double-down"></i></a>
	  		</div>
	  		
	  		<!-- SHADOW -->
	  		<div id="shade"></div>

		  	<div id="header-video"
			    data-vide-bg="mp4: assets/images/video/video2, poster: assets/images/video/poster-2" data-vide-options="posterType: jpg, loop: true, muted: true, position: 50% 50%">
			</div>
	  		
	  	</header>
	  	<!-- END HEADER -->
	  	
	  	<!-- START MAIN CONTAINER -->
	<div class="main-container">
  		<div class="container-fluid no-padding">
  			<!-- SKILLS -->
  			<h2 class="nav-home2 home2-font-face video-heading animate-me fadeInUp">
  				New 
  			</h2>
  			<div id="skills-container" class="skills">
	  			<div class="skills-row row no-margin">
		  			<div class="skill animate-me zoomIn col-md-4 skill-padding no-border">
			  			<iframe src="https://www.youtube.com/embed/vLT3A0a3hoQ?rel=0&wmode=transparent" frameborder="0" allowfullscreen style="width: 100%;height: 240px;"></iframe>
		  			</div>
		  			<div class="skill animate-me zoomIn col-md-4 skill-padding no-border">
			  			<iframe src="https://www.youtube.com/embed/vLT3A0a3hoQ?rel=0&wmode=transparent" frameborder="0" allowfullscreen style="width: 100%;height: 240px;"></iframe>
		  			</div>
		  			<div class="skill animate-me zoomIn col-md-4 skill-padding no-border">
			  			<iframe src="https://www.youtube.com/embed/vLT3A0a3hoQ?rel=0&wmode=transparent" frameborder="0" allowfullscreen style="width: 100%;height: 240px;"></iframe>
		  			</div>
	  			</div>
  			</div>
  		</div>

  		<div class="container-fluid no-padding">
  			<!-- SKILLS -->
  			<h2 class="nav-home2 home2-font-face video-heading animate-me fadeInUp">
  				Featured 
  			</h2>
  			<div id="skills-container" class="skills">
	  			<div class="skills-row row no-margin">
		  			<div class="skill animate-me zoomIn col-md-4 skill-padding no-border">
			  			<iframe src="https://www.youtube.com/embed/vLT3A0a3hoQ" frameborder="0" allowfullscreen="" style="width: 100%;height: 240px;"></iframe>
		  			</div>
		  			<div class="skill animate-me zoomIn col-md-4 skill-padding no-border">
			  			<iframe src="https://www.youtube.com/embed/vLT3A0a3hoQ" frameborder="0" allowfullscreen="" style="width: 100%;height: 240px;"></iframe>
		  			</div>
		  			<div class="skill animate-me zoomIn col-md-4 skill-padding no-border">
			  			<iframe src="https://www.youtube.com/embed/vLT3A0a3hoQ" frameborder="0" allowfullscreen="" style="width: 100%;height: 240px;"></iframe>
		  			</div>
	  			</div>
  			</div>
  		</div>

  		<div class="container-fluid no-padding">
  			<!-- SKILLS -->
  			<h2 class="nav-home2 home2-font-face video-heading animate-me fadeInUp">
  				Most Viewed 
  			</h2>
  			<div id="skills-container" class="skills">
	  			<div class="skills-row row no-margin">
		  			<div class="skill animate-me zoomIn col-md-4 skill-padding no-border">
			  			<iframe src="https://www.youtube.com/embed/vLT3A0a3hoQ" frameborder="0" allowfullscreen="" style="width: 100%;height: 240px;"></iframe>
		  			</div>
		  			<div class="skill animate-me zoomIn col-md-4 skill-padding no-border">
			  			<iframe src="https://www.youtube.com/embed/vLT3A0a3hoQ" frameborder="0" allowfullscreen="" style="width: 100%;height: 240px;"></iframe>
		  			</div>
		  			<div class="skill animate-me zoomIn col-md-4 skill-padding no-border">
			  			<iframe src="https://www.youtube.com/embed/vLT3A0a3hoQ" frameborder="0" allowfullscreen="" style="width: 100%;height: 240px;"></iframe>
		  			</div>
	  			</div>
  			</div>
  		</div>	
  			
  		<!-- CUSTOM CONTAINER -->
  		<section class="contact-container">
	  		<div class="contact-boxes align-center">
	  			<div class="contact-box home2-contact-box animate-me zoomIn">
					<button class="btn"><img src="{{ URL::to('/') }}/assets/images/icons/social_youtube_box_white_48.png">
					</button>	
	  			</div>
	  			<div class="contact-box home2-contact-box animate-me zoomIn">
					<button class="btn"><img src="{{ URL::to('/') }}/assets/images/icons/social_facebook_box_blue_48.png">
					</button>
	  			</div>
	  			<div class="contact-box home2-contact-box animate-me zoomIn">
					<button class="btn"><img src="{{ URL::to('/') }}/assets/images/icons/instagram.png"> </button>		
	  			</div>
	  			<div class="contact-box home2-contact-box animate-me zoomIn">
	  				<button class="btn"><img src="{{ URL::to('/') }}/assets/images/icons/social_twitter_box_blue_48.png"></button>		
	  			</div>
	  			<div class="contact-box home2-contact-box animate-me zoomIn">
	  				<button class="btn"><img src="{{ URL::to('/') }}/assets/images/icons/gPlus.png"> </button>		
	  			</div>
	  		</div>
  		</section>
	  	
	  	
	  	<!-- START FOOTER -->
	  	<footer class="">
		  
		  	<div id="copyright" class="animate-me fadeInUp">
		  		<div class="container">
			  		<div>&#169; 2016 All Rights Reserved. Powered by CheckthisOut.<br><br>
				  		<ul id="footer-navigation">
					  		<li><a href="page.html">Terms of Use</a></li>
					  		<li><a href="page.html">Privacy Policy</a></li>
					  		<li><a href="contact.html">Contact Us</a></li>
				  		</ul> 
		  			</div>
		  		</div>
		  	</div>
	  	</footer>
	  	<!-- END FOOTER -->
	  	
	  	<!-- SCROLL TOP -->
	  	<a href="#" id="scroll-top" class="fadeInRight animate-me"><i class="fa fa-angle-double-up"></i></a>
  	</div>

	<!-- SCRIPTS -->
    <script src="{{ URL::to('/') }}/assets/js/plugins.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/custom.js"></script>
	<script type="text/javascript">
		/*TEXT TICKER (ONLY FOR HOME PAGE)*/
		$('#ticker-text').vTicker('init', {
			speed: 300, 
		    pause: 2000
	    });

	</script>
  </body>
  <!-- END BODY -->
</html>