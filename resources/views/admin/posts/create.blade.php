@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3>
                        New Post
                    </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- /.form-group -->
                            @include('includes.form_error');
                            {!! Form::open(['method'=>'post', 'action'=>'AdminPostsController@store', 'files'=> true]) !!}
                            {!! Form::token() !!}
                            <div class="form-group">
                                {!! Form::label('title', 'Title:') !!}
                                {!! Form::text('title', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('category_id', 'Category:') !!}
                                {!! Form::select('category_id', ['' => 'Choose Options']+$categories, null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('photo_id', 'Choose Image:') !!}
                                {!! Form::file('photo_id', ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('body', 'Body:') !!}
                                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}



                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->


    </div><!-- /.row -->
@endsection