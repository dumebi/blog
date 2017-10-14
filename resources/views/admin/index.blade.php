@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-play"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Media</span>
                    <span class="info-box-number">{{count(\App\Photo::all())}}</span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-book"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Posts</span>
                    <span class="info-box-number">{{count(\App\Post::all())}}</span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Admin</span>
                    <span class="info-box-number">{{count(\App\User::all())}}</span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col --><div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-cog"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Categories</span>
                    <span class="info-box-number">{{count(\App\Category::all())}}</span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>


    </div><!-- /.row -->
@endsection