@extends('admin-main-layout')

@section('content')

<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Video Listing
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <table  class="display table table-bordered table-responsive table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Video URL</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($video_details as $k=>$v)
                    <tr class="gradeX">
                        <td>{{$v->first_name}} {{$v->last_name}} </td>
                        <td>{{$v->email}}</td>
                        <td>{{$v->phone}}</td>
                        <td class="center">{{$v->video_url}}</td>
                        <td class="center">
                        <a type="button" class="btn <?php if($v->status==0) echo 'btn-danger fa fa-times'; else echo 'btn-success btn-check'; ?> checkToggle1" data-toggle="tooltip" title="<?php if($v->status==0) echo 'Reject'; else echo 'Approve'; ?>" status="{{$v->status}}" video-id="{{ $v->id }}">
                        </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Video URL</th>
                        <th>Status</th>
                    </tr>
                    </tfoot>
                    </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>


    </section>
</section>


<script type="text/javascript">
    $(".checkToggle").click(function() {
        
        var category_id=$(this).attr('video-id');
        var status=$(this).attr('status');
        var x=$(this);
        console.log(category_id);
        var toggle_status=status?'0':'1';
        if(category_id){

            var base_path = window.location.protocol + "//" + window.location.host + "/"; 
            var base_path_1 = base_path+'checkthisout/public/administrator/'; 
            var post_path = base_path_1+"set-video-status";

            // console.log($(this).val());
            $.post(post_path, {video_id: category_id, status: toggle_status}, function(result) {                
                console.log(result);
                $('.toast-alert-message').stop().fadeIn(400).delay(3000).fadeOut(400);  
                if($toggle_status){
                    x.attr('status',toggle_status);
                    x.attr('title',Approve);
                    x.removeClass('btn-danger fa fa-times');
                    x.addClass('btn-success fa fa-check');
                    $('.toast-alert-message').text('Video Approved successfully');
                } else{
                    x.attr('status',toggle_status);
                    x.attr('title',Reject);
                    x.removeClass('btn-success fa fa-check');
                    x.addClass('btn-danger fa fa-times');
                    $('.toast-alert-message').text('Video Rejected successfully');
                }         
                
            }); 
        }
    
    });

</script>
@stop