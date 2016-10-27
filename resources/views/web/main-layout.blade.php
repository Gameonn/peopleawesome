<!DOCTYPE html>
<html lang="en">
<head>
    <title>CheckthisOut</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <link href="{{ URL::to('/') }}/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="{{ URL::to('/') }}/assets/css/animate.min.css" rel="stylesheet" media="screen">
    <link href="{{ URL::to('/') }}/assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="{{ URL::to('/') }}/assets/style.css" rel="stylesheet" media="screen">
    <link href="{{ URL::to('/') }}/assets/css/options.css" rel="stylesheet" media="screen">
    <link href="{{ URL::to('/') }}/assets/css/responsive.css" rel="stylesheet" media="screen">
    <link href="{{ URL::to('/') }}/assets/css/mystyle.css" rel="stylesheet" media="screen">

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:900,300,400,200,800' rel='stylesheet' type='text/css'>
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>   

</head>
<body class="bg-home2">

<div id="page">

		<div class="subscribe-btn">
			<a href="https://www.youtube.com/channel/UCxFp5HfTD0nL-Km9JYlvQgA?sub_confirmation=1" class="btn btn-danger fa fa-play-circle"> Subscribe </a> 
		</div>

    <div class="subscribe-btn mailing-opt hidden-xs">
      <a href="{{ URL::to('/') }}/mailing-list" target="_blank" class="btn btn-primary fa fa-envelope-o"> Mailing List </a> 
    </div>

	  <div class="img-header align-center hidden-xs">
		<img src="{{ URL::to('/') }}/assets/images/logo-fixed-menu.png">
	  </div>

  	<!-- START HEADER -->
  	<header id="header" class="small">
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
  			
	  		<ul id="left-navigation" class="animate-me fadeInLeftBig nav-width-left">
		  		<li class="menu-item menu-item-has-children home2-font-face">
		  			<a href="{{ URL::to('/') }}/home">Home</a>
		  		</li>
		  		<li class="menu-item menu-item-has-children home2-font-face">
			  			<a href="{{ URL::to('/') }}/submit-video" class="submit-video-color" >SUBMIT YOUR VIDEOS HERE</a>
		  		</li>

	  		</ul>
	  		<ul id="right-navigation" class="animate-me fadeInRightBig nav-width-right">
        		<li class="menu-item home2-font-face"><a href="{{ URL::to('/') }}/about-us" >About Us</a></li>
	  		</ul>
  		</nav>

  		<!-- SHADOW -->
  		<div id="shade"></div>

  		<!-- HEADER SLIDER -->
	  	<div class="flexslider" id="header-slider">
	  		<ul class="slides">
	  			<li><img src="{{ URL::to('/') }}/assets/images/backgrounds/bg1.jpg" alt="SLider Image"></li>
	  			<li><img src="{{ URL::to('/') }}/assets/images/backgrounds/bg6.jpg" alt="SLider Image"></li>
	  			<li><img src="{{ URL::to('/') }}/assets/images/backgrounds/bg8.jpg" alt="SLider Image"></li>
	  			<li><img src="{{ URL::to('/') }}/assets/images/backgrounds/bg12.jpg" alt="SLider Image"></li>
	  		</ul>	
	  	</div>
  		
  	</header>
  	<!-- END HEADER -->
  	
  	<!-- START MAIN CONTAINER -->
  	<div class="main-container">

		@yield('content')

	</div>

<!-- START FOOTER -->
  	<footer id="footer" class="">
	  	
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

	<!-- SCRIPTS -->
    <script src="{{ URL::to('/') }}/assets/js/plugins.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/custom.js"></script>


</body>
</html>