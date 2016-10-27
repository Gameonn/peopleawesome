<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- PAGE TITLE -->
    <title>Home - Check This Out</title>
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

  		<div class="subscribe-btn hidden-xs">
			<a href="https://www.youtube.com/channel/UCxFp5HfTD0nL-Km9JYlvQgA?sub_confirmation=1" target="_blank" class="btn btn-danger fa fa-play-circle">  YouTube Subscribe </a> 
		</div>

  		<div class="subscribe-btn mailing-opt hidden-xs">
			<a href="{{ URL::to('/') }}/mailing-list" target="_blank" class="btn btn-danger fa fa-envelope-o"> Mailing List </a> 
		</div>

	  <div class="img-header align-center hidden-xs">
		<img src="{{ URL::to('/') }}/assets/images/logo-fixed-menu.png">
	  </div>

	  	<header id="header" class="big">
	  		<!-- POINTER ANIMATED -->
	  		<canvas id="header-canvas"></canvas>
	  		
	  		<!-- MOBILE NAVIGATION -->
	  		<nav id="navigation-mobile"></nav>
	  	
	  		<!-- MAIN MENU -->
	  		<nav id="navigation" class="nav-home2">
	  			<!-- DISPLAY MOBILE MENU -->
	  			<a href="#" id="show-mobile-menu"><i class="fa fa-bars"></i></a>
	  			<!-- CLOSE MOBILE MENU -->
		  		<a href="#" id="close-navigation-mobile"><i class="fa fa-long-arrow-left"></i></a>
	  			
	  		<ul id="left-navigation" class="animate-me fadeInLeftBig nav-width-normal">
	            <li class="menu-item menu-item-has-children home2-font-face">
	              <a href="{{ URL::to('/') }}/home">Home</a>
	            </li>
	            <li class="menu-item menu-item-has-children home2-font-face">
	                <a href="{{ URL::to('/') }}/submit-video" class="submit-video-color" >SUBMIT YOUR VIDEOS HERE</a>
	            </li>
	            <li class="menu-item menu-item-has-children home2-font-face">
	                <a href="{{ URL::to('/') }}/about-us" >About Us</a>
	            </li>

          	</ul>

		  		<!-- <ul id="right-navigation" class="animate-me fadeInRightBig nav-width-right">
			  		<li class="menu-item home2-font-face"><a href="{{ URL::to('/') }}/about-us" >About Us</a></li>
		  		</ul> -->

	  		</nav>
	  		
			<!-- <div id="ticker" class="animate-me zoomIn">
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
			</div> -->  		
	  		
	  		<!-- SCROLL BOTTOM -->
	  		<div id="scroll-bottom" class="animate-me fadeInUpBig">
		  		<a href="#"><i class="fa fa-angle-double-down"></i></a>
	  		</div>
	  		
	  		<!-- SHADOW -->
	  		<div id="shade"></div>

		  	<div id="header-video" class="video-poster" data-vide-bg="mp4: assets/images/video/video2, poster: assets/images/video/poster-2" data-vide-options="posterType: jpg, loop: true, muted: true, position: 50% 50%" >
			</div>

			<!-- <video width="100%" loop controls autoplay class="connect-bg">
			    <source data-src="assets/images/video/video2.mp4" type="video/mp4">
			</video> -->
		<!-- <section id="landing">

			<div class="fallback-image" style="background-image: url('http://www.peopleareawesome.com/img/fallback.jpg')"></div>
			<div class="video landing-video">
				<iframe src="https://player.vimeo.com/video/130321631?autoplay=1&amp;loop=1" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<div class="video-block"></div>
			</div>
		</section> -->
	  		
	  	</header>
	  	
	  	<!-- START MAIN CONTAINER -->
	<div class="main-container">
  		<div class="container-fluid no-padding">
  			<!-- SKILLS -->
  			<h2 class="title-bar-home2 home2-font-face video-heading animate-me fadeInUp">
  				New Videos
  			</h2>
  			<div id="skills-container" class="skills">
	  			<div class="skills-row row no-margin new-video">
		  			<!-- lazy loading of youtube new videos -->
	  			</div>
  			</div>
  		</div>

  		<div class="container-fluid no-padding">
  			<!-- SKILLS -->
  			<h2 class="title-bar-home2 home2-font-face video-heading animate-me fadeInUp">
  				Featured Videos
  			</h2>
  			<div id="skills-container" class="skills">
	  			<div class="skills-row row no-margin featured-video">
		  			<!-- lazy loading of youtube featured videos -->
	  			</div>
  			</div>
  		</div>

  		<!-- <div class="container-fluid no-padding">
  			<h2 class="title-bar-home2 home2-font-face video-heading animate-me fadeInUp">
  				Most Viewed Videos
  			</h2>
  			<div id="skills-container" class="skills">
	  			<div class="skills-row row no-margin most-viewed-video">
	  			</div>
  			</div>
  		</div>	 -->
  			
  		<!-- CUSTOM CONTAINER -->
  		<section class="contact-container">
	  		<div class="contact-boxes align-center">
	  			<div class="contact-box home2-contact-box animate-me zoomIn">
					<a class="btn" href="https://www.youtube.com/channel/UCxFp5HfTD0nL-Km9JYlvQgA" target="_blank"><img src="{{ URL::to('/') }}/assets/images/icons/social_youtube_box_white_48.png">
					</a>	
	  			</div>
	  			<div class="contact-box home2-contact-box animate-me zoomIn">
					<a class="btn" href="https://www.facebook.com/checkthisoutvideos" target="_blank"><img src="{{ URL::to('/') }}/assets/images/icons/social_facebook_box_blue_48.png">
					</a>
	  			</div>
	  			<div class="contact-box home2-contact-box animate-me zoomIn">
					<a class="btn" href="https://www.instagram.com/checkthisoutvideos" target="_blank"><img src="{{ URL::to('/') }}/assets/images/icons/instagram.png"> </a>		
	  			</div>
	  			<div class="contact-box home2-contact-box animate-me zoomIn">
	  				<a class="btn" href="https://twitter.com/checkthisoutvid" target="_blank"><img src="{{ URL::to('/') }}/assets/images/icons/social_twitter_box_blue_48.png"></a>		
	  			</div>
	  			<div class="contact-box home2-contact-box animate-me zoomIn">
	  				<a class="btn" href="https://plus.google.com/116600569657429960285" target="_blank"><img src="{{ URL::to('/') }}/assets/images/icons/gPlus.png"> </a>		
	  			</div>
	  		</div>
  		</section>
	  	
	  	
	  	<!-- START FOOTER -->
	  	<footer class="">
		  
		  	<div id="copyright" class="animate-me fadeInUp">
		  		<div class="container">
			  		<div>&#169; 2016 All Rights Reserved. Powered by Check This Out.<br><br>
				  		<ul id="footer-navigation">
					  		<li><a href="{{ URL::to('/') }}/terms-conditions" target="_blank">Terms of Use</a></li>
					  		<li><a href="{{ URL::to('/') }}/privacy-policy" target="_blank">Privacy Policy</a></li>
					  		<li><a href="{{ URL::to('/') }}/contact-us" target="_blank">Contact Us</a></li>
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
    <script src="{{ URL::to('/') }}/assets/js/jquery.lazyloadxt.extra.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/my.js"></script>
    <!-- <script src="{{ URL::to('/') }}/assets/js/production.js"></script> -->
	<script type="text/javascript">

// 	$(function() {
//   $("video.connect-bg source").each(function() {
//     var sourceFile = $(this).attr("data-src");
//     $(this).attr("src", sourceFile)
//     var video = this.parentElement;
//     video.load();
//     video.play();    
//   });
// })
		// $('#ticker-text').vTicker('init', {
		// 	speed: 300, 
		//     pause: 2000
	 //    });

	</script>
  </body>
  <!-- END BODY -->
</html>