@extends('admin-main-layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Change Password
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Change Password</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">Change Password</h3>
                        </div><!-- /.box-header -->

                        <div class="box-body">
                            {!! Form::open(array('url' => 'admin/change-password', 'method' => 'post')) !!}
                                
                                <div class="form-group">
                                    <label>Old Password</label>
                                    <input type="password" class="form-control" placeholder="Old Password" name="old_password">
                                </div>

                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" class="form-control" placeholder="New Password" name="new_password">
                                </div>

                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </div>
                            {!! Form::close() !!}                            

                            @if(isset($response))                                
                                <div class="alert alert-warning alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                                    {{$response}}
                                </div>                                
                            @endif

                        </div><!-- /.box-body -->
                    </div>
                </div>

            </div>

        </section><!-- /.content -->

    </div><!-- /.content-wrapper -->



@stop