<!DOCTYPE HTML>
<html>
<head>
    <title>Check This Out </title>
	<meta charset="UTF-8">
	<meta name="Q-Asar" content="true" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="author" content="Ankit"/>
    <meta name="keywords" content="error page"/>
    <meta name="description" content="Check This Out - Error page"/>
	
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ URL::to('/') }}/assets/css/404.css">
    <link rel="stylesheet" type="text/css" media="all" href="{{ URL::to('/') }}/assets/css/master.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

	<!-- Javascripts -->
	<script type="text/javascript" charset="utf-8" src="{{ URL::to('/') }}/assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="{{ URL::to('/') }}/assets/js/plax.js"></script>
	<script type="text/javascript" charset="utf-8" src="{{ URL::to('/') }}/assets/js/404.js"></script>
</head>
	<body id="errorpage" class="error404">
        <div id="pagewrap">
            <!--Header Start-->
            <div id="header" class="header">
                <div class="container">
                    <a href="{{ URL::to('/') }}/home" title="logo" class="link">
                    	<img class="logo" src="{{ URL::to('/') }}/assets/images/logo-fixed-menu.png" alt="Logo"/>
					</a>
                </div>
            </div><!--Header End-->

			<!--page content-->
            <div id="wrapper" class="clearfix">     
                <div id="parallax_wrapper">    
                    <div id="content">
                        <h1>Oh No!<br />It looks like you are lost</h1><br><br><br>
                        <?php $current_url = Request::url() ?>
	                    @if(strpos($current_url,'administrator')) 
	                        <a href="{{ URL::to('/') }}/administrator/dashboard" class="button">Go Home</a>
	                    @else
	                        <a href="{{ URL::to('/') }}/home" class="button">Go Home</a>
	                    @endif
                    </div>
                </div>
            </div>

        </div><!-- end pagewrap -->
		
		<!--page footer-->
        <section style="background-color:#eeeeee;">
			<div class="footer footerPadding">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="copyFooter">
								<a href="#">&copy; Check This Out</a>
							</div>
						</div>
						<div class="col-sm-4">
							<nav class="social-icons">
								<ul class="clearfix">
									<li><a href="#" class="icon-button shopIcon" target="_blank"><i class="fa fa-twitter"></i><span></span></a></li>
									<li><a href="https://www.facebook.com/checkthisoutvideos" target="_blank" class="icon-button shopIcon"><i class="fa fa-facebook"></i><span></span></a></li>
									<li><a href="https://www.instagram.com/checkthisoutvideos" target="_blank" class="icon-button shopIcon"><i class="fa fa-instagram"></i><span></span></a></li>
									<li><a href="https://twitter.com/checkthisoutvid" target="_blank" class="icon-button shopIcon"><i class="fa fa-twitter"></i><span></span></a></li>
									<li><a href="https://www.youtube.com/channel/UCxFp5HfTD0nL-Km9JYlvQgA" target="_blank" class="icon-button shopIcon"><i class="fa fa-youtube-play"></i><span></span></a></li>
									<li><a href="https://plus.google.com/116600569657429960285" target="_blank" class="icon-button shopIcon"><i class="fa fa-google-plus"></i><span></span></a></li>  
								</ul>
							</nav>
						</div>
						<div class="col-sm-4">
							<div class="goTop back-to-top" id="back-to-top">
								<i class="fa fa-angle-up"></i>
								<a href="#">Go Top</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
       <!--end page footer-->

    </body>

</html>

