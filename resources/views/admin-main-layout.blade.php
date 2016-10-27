<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="CheckthisOut">

    <meta http-equiv=”X-UA-Compatible” content=”IE=EmulateIE9”>
    <meta http-equiv=”X-UA-Compatible” content=”IE=9”>

    <link rel="shortcut icon" href="images/favicon.png">
    <title>Check This Out - Admin</title>
    <!--Core CSS -->
    <link href="{{ URL::to('/') }}/admin_assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/admin_assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/admin_assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/admin_assets/css/bootstrap-switch.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/admin_assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/admin_assets/js/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/admin_assets/css/clndr.css" rel="stylesheet">
    <!--clock css-->
    <link href="{{ URL::to('/') }}/admin_assets/js/css3clock/css/style.css" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/admin_assets/js/morris-chart/morris.css">
    <!-- Custom styles for this template -->
    <link href="{{ URL::to('/') }}/admin_assets/css/style.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/admin_assets/css/style-responsive.css" rel="stylesheet"/>
    <script src="{{ URL::to('/') }}/admin_assets/js/jquery.js"></script>
    <script src="{{ URL::to('/') }}/admin_assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
    <script src="{{ URL::to('/') }}/admin_assets/bs3/js/bootstrap.min.js"></script>
    <style type="text/css">
        .toast-alert-message {
    width: 250px;
    height: auto;
    position: fixed;
    right: 0%;
    margin-left: -100px;
    z-index: 2;
    top: 16%;
    background-color: #51a351;
    color: #F0F0F0;
    font-family: Calibri;
    font-size: 18px;
    padding: 10px;
    text-align: center;
    border-radius: 2px;
    -webkit-box-shadow: 0px 0px 24px -1px rgba(56, 56, 56, 1);
    -moz-box-shadow: 0px 0px 24px -1px rgba(56, 56, 56, 1);
    box-shadow: 0px 0px 24px -1px rgba(56, 56, 56, 1);
}
    </style>

</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="{{ URL::to('/') }}/administrator/dashboard" class="logo" style="margin: 5px 0 0 40px;">
        <img src="{{ URL::to('/') }}/assets/images/logo-fixed-menu.png" alt="" style="height:80px;">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->


<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">

        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{ URL::to('/') }}/admin_assets/images/avatar1_small.jpg">
                <span class="username">Administrator</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="{{ URL::to('/') }}/administrator/logout"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->

    </ul>
    <!--search & user info end-->
</div>

</header>
<!--header end-->

<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">       
        <?php $current_url = Request::url() ?>

        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="<?php if(strpos($current_url,'administrator/dashboard')) { echo 'active'; } ?>" href="{{ URL::to('/') }}/administrator/dashboard">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="<?php if(strpos($current_url,'administrator/video-listing')) { echo 'active'; } ?>" href="{{ URL::to('/') }}/administrator/video-listing">
                        <i class="fa fa-tasks"></i>
                        <span>Video Uploads</span>
                    </a>
                </li>
                <li>
                    <a class="<?php if(strpos($current_url,'administrator/message-listing')) { echo 'active'; } ?>" href="{{ URL::to('/') }}/administrator/message-listing">
                        <i class="fa fa-envelope"></i>
                        <span>Messages</span>
                    </a>
                </li>
                <li>
                    <a class="<?php if(strpos($current_url,'administrator/mail-listing')) { echo 'active'; } ?>" href="{{ URL::to('/') }}/administrator/mail-listing">
                        <i class="fa fa-inbox"></i>
                        <span>Mailing List</span>
                    </a>
                </li>

            </ul>            
        </div>
        <!-- sidebar menu end-->

    </div>
</aside>
<!--sidebar end-->


<!--main content start-->

 @yield('content')

<!--main content end-->

</section>

<div class="toast-alert-message" style="display:none;">  </div>

<!--Core js-->
<script src="{{ URL::to('/') }}/admin_assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/jquery.scrollTo.min.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/jquery.nicescroll.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/skycons/skycons.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/calendar/clndr.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/calendar/moment-2.2.1.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/evnt.calendar.init.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/jvector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/jvector-map/jquery-jvectormap-us-lcc-en.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/gauge/gauge.js"></script>
<!--clock init-->
<script src="{{ URL::to('/') }}/admin_assets/js/css3clock/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<script src="{{ URL::to('/') }}/admin_assets/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="{{ URL::to('/') }}/admin_assets/js/sparkline/jquery.sparkline.js"></script>
<!--Morris Chart-->
<script src="{{ URL::to('/') }}/admin_assets/js/morris-chart/morris.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/morris-chart/raphael-min.js"></script>
<!--jQuery Flot Chart-->
<script src="{{ URL::to('/') }}/admin_assets/js/flot-chart/jquery.flot.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/flot-chart/jquery.flot.resize.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/flot-chart/jquery.flot.animator.min.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/flot-chart/jquery.flot.growraf.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/dashboard.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/jquery.customSelect.min.js" ></script>
<script src="{{ URL::to('/') }}/admin_assets/js/dynamic_table_init.js"></script>

<!--common script init for all pages-->
<script src="{{ URL::to('/') }}/admin_assets/js/scripts.js"></script>
<script src="{{ URL::to('/') }}/admin_assets/js/toggle-init.js"></script>
<!--script for this page-->
</body>
</html>