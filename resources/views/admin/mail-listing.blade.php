@extends('admin-main-layout')

@section('content')

<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Mailing List
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <table  class="display table table-bordered table-responsive table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>Email</th>
                        <th>Country</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($mail_details as $k=>$v)
                    <tr class="gradeX">
                        <td>{{$v->email}} </td>
                        <td>{{$v->country}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
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


@stop