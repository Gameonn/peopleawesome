@extends('main-layout')

@section('content')

<div id="contact-container" class="container">
	<!-- SKILLS -->
	<h2 class="align-center home2-font-face animate-me fadeInUp" style="margin-top:-9rem;">
		Contact <span>Us</span>
	</h2>
	<!-- <p class="center">Check This Out is dedicated to finding the best of the web and delivering it straight to you. We love watching amazing, interesting and cool videos and we love sharing them with you too. The videos we cover aren't limited by category, but anything that amazes us, makes us laugh or stands out from the ordinary, we love to cover. We also love to hear from you. If you have a video that you think we should check out, share it with us here (http://m.me/checkthisoutvideos), and we can get it out there for people to see.
	</p> --> <br>

	 <?php $message = Session::get('message') ?>
            @if(isset($message))
            <div class="alert alert-success alert-dismissible fade in align-center" role="alert"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button> 
                <strong> {{ $message }} </strong> 
            </div>
            @endif

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
	{!! Form::open(array('url' => 'send-feedback', 'method' => 'post', 'id' => 'video-upload-form', 'class'=>'form-horizontal' )) !!}
  
			<div class="form-group row">
				<label class="control-label col-md-3" for="contact-name">Name</label>
				<div class="controls col-md-9">
					<input id="contact-name" name="first_name" type="text" placeholder="Steve Smith" class="input-xlarge form-control">
				</div>
			</div>
			<!-- EMAIL -->
			<div class="form-group row">
				<label class="control-label col-md-3" for="contact-email">Email</label>
				<div class="controls col-md-9">
					<input id="contact-email" name="email" type="text" placeholder="example@example.com" class="input-xlarge form-control">
				</div>
			</div>
			<!-- TOPIC -->
			<div class="form-group row">
				<label class="control-label col-md-3" for="contact-topic">Topic</label>
				<div class="controls col-md-9">
					<select id="contact-topic" name="contact_topic" class="input-xlarge form-control">
						<option value="1">Request something</option>
						<option value="2" >Question</option>
						<option value="3" selected="selected">Support</option>
						<option value="4">Other</option>
					</select>
				</div>
			</div>
			<!-- MESSAGE -->
			<div class="form-group row">
				<label class="control-label col-md-3" for="contact-message">Message</label>
				<div class="controls col-md-9">                     
					<textarea id="contact-message" name="contact_message" class=" form-control" rows="5" placeholder="We are eager to hear from you !"></textarea>
				</div>
			</div>

			<div class="form-group row">
                  <label class="col-md-3 control-label">Captcha</label>
                  <div class="col-md-6">
                        {!! app('captcha')->display(); !!}
                  </div>
            </div>

			<!-- BUTTON -->
			<div class="form-group text-right">
			 	<input type="hidden" name="submitted" id="submitted" value="true" />
			 	<button type="submit" class="btn btn-default" name="submitted"><i class="fa fa-paper-plane-o"></i> Send</button>
			</div>
		{!! Form::close() !!}
		</div>
	</div>
</div>

<div class="container">
	<!-- CUSTOMER REVIEWS -->
	<h2 class="align-center home2-font-face animate-me fadeInUp">
		Get In Touch
	</h2>
</div>

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

 <!-- ONLY FOR THE CONTACT PAGE : MAP SCRIPT -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script> -->
    <script>
		/* function initialize() {
		  var myLatlng = new google.maps.LatLng(48.856614,2.352222); //http://itouchmap.com/latlong.html
		  var mapOptions = {
		    zoom: 15,
		    center: myLatlng
		  }
		  var map = new google.maps.Map(document.getElementById('GoogleMap'), mapOptions);
		
		  var marker = new google.maps.Marker({
		      position: myLatlng,
		      map: map,
		      title: 'Contact Us!'
		  });
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
		*/
	</script>
	
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
<script src="{{URL::to('/')}}/assets/js/custom-form-validate.js" type="text/javascript"></script>

@stop