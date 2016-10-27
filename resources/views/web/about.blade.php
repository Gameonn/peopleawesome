@extends('main-layout')

@section('content')

<div class="container">
	<!-- ABOUT -->
	<h2 class="align-center home2-font-face animate-me fadeInUp" style="margin-top:-9rem;">
		About Us 
	</h2>
	<div class="row">
		<div class="col-md-12">
			<!-- <h3>Our History</h3> -->
			<p class="text-justify"><span class="dropcap">T</span>he internet is a big place. Check This Out is all about finding the best and funniest videos and bringing it straight to you without any hassle. The content we cover includes sports, people, animals, cars, technology, travelling and entertainment. But we don't stop there. Anything that amazes us and stands out from the average, we'll deliver to you. If you have a video worth checking out, please share it with us <a href="http://m.me/checkthisoutvideos" class="social-tag-link" target="_blank">here </a> so we can feature it. Check This Out posts the best of the web on <a href="https://www.youtube.com/channel/UCxFp5HfTD0nL-Km9JYlvQgA" class="social-tag-link" target="_blank"> Youtube </a>, <a href="https://twitter.com/checkthisoutvid" class="social-tag-link" target="_blank">Twitter </a> and <a href="https://www.instagram.com/checkthisoutvideos" class="social-tag-link" target="_blank"> Instagram</a>.</p>
		</div>
	</div>
	<hr>
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



@stop