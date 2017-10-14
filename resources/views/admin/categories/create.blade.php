@extends('layouts.admin')

@section('content')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            height: 500,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            content_css: '//www.tinymce.com/css/codepen.min.css'
        });
    </script>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">New Category</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- /.form-group -->
                            @include('includes.form_error')
                            {!! Form::open(['method'=>'post', 'action'=>'AdminCategoriesController@store', 'files'=> true]) !!}
                            {!! Form::token() !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Name:') !!}
                                {!! Form::text('name', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection