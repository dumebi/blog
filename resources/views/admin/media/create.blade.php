@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
    @endsection


@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Upload Media</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- /.form-group -->
                            @include('includes.form_error')
                            {!! Form::open(['method'=>'post', 'action'=>'AdminMediaController@store', 'class'=>'dropzone']) !!}
                            {!! Form::token() !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Home:') !!}
                                {!! Form::hidden('name', 'home', ['class'=>'form-control']) !!}
                            </div>

                            {!! Form::close() !!}

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- /.form-group -->
                            @include('includes.form_error')
                            {!! Form::open(['method'=>'post', 'action'=>'AdminMediaController@store', 'class'=>'dropzone']) !!}
                            {!! Form::token() !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Event:') !!}
                                {!! Form::hidden('name', 'event', ['class'=>'form-control']) !!}
                            </div>

                            {!! Form::close() !!}

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
    @endsection