@extends('main-layout')

@section('content')

<div class="container">

  {!! Form::open(array('url' => 'upload-video', 'method' => 'post', 'id' => 'video-upload-form', 'class'=>'form-horizontal' )) !!}
    
      <fieldset>

        <h2 class="align-center home2-font-face animate-me fadeInUp" style="margin-top:-9rem;">
          Submit Your Video! 
        </h2>
            <?php $message = Session::get('message') ?>
            @if(isset($message))
            <div class="alert alert-success alert-dismissible fade in align-center" role="alert"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button> 
                <strong> {{ $message }} </strong> 
            </div>
            @endif

        <div class="form-group">
          <label class="col-md-4 control-label">Video Url </label>  
           <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-globe"></i></span>
          <input name="video_url" id="video_url" placeholder="Video url" class="form-control" type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">First Name</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" >Last Name</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">E-Mail</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
          <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
            </div>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-4 control-label">Phone #</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Captcha</label>
            <div class="col-md-6">
                  {!! app('captcha')->display(); !!}
            </div>
        </div>

        <div class=" align-center">
           <p><input type="checkbox" id="is_owner" name="is_owner"> <span class="small-text">I shot the video myself! No one else helped me create the video.</span></p>
           <p><input type="checkbox" name="age" id="age" required> <span class="small-text">I am 13 years of age or older.</span></p>
        </div>

        <div class="form-group align-center">
          <p>By clicking “Submit” you are opting into our exclusive newsletter, and have read, accepted, and agree to adhere to the 
            <a href="{{ URL::to('/') }}/upload-video-terms" class="social-tag-link" target="_blank"> Terms of Submission </a></p>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4 text-center">
            <button type="submit" class="btn btn-warning">Submit <span class="fa fa-paper-plane"></span></button>
          </div>
        </div>

      </fieldset>

    {!! Form::close() !!}

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

<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
<script src="{{URL::to('/')}}/assets/js/custom-form-validate.js" type="text/javascript"></script>


@stop