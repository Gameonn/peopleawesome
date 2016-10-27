@extends('admin-main-layout')

@section('content')

<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-md-4">
                <div class="mini-stat clearfix">
                    <span class="mini-stat-icon orange"><i class="fa fa-video-camera"></i></span>
                    <div class="mini-stat-info">
                        <span>{{$dashboard_details[0]->user_videos_count}}</span>
                        Video List
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mini-stat clearfix">
                    <span class="mini-stat-icon tar"><i class="fa fa-envelope"></i></span>
                    <div class="mini-stat-info">
                        <span>{{$dashboard_details[0]->user_feedback_count}}</span>
                        Message List
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mini-stat clearfix">
                    <span class="mini-stat-icon pink"><i class="fa fa-inbox"></i></span>
                    <div class="mini-stat-info">
                        <span>{{$dashboard_details[0]->mailing_list_count}}</span>
                        Mailing List
                    </div>
                </div>
            </div>
        </div>


    </section>
</section>


@stop