@extends('layouts.admin')

@section('content')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: "textarea",
            height: 500,
            charLimit : 300000,
            theme: "modern",
            paste_data_images: true,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            toolbar2: "print preview media | forecolor backcolor emoticons",
            image_advtab: true,
            file_picker_callback: function(callback, value, meta) {
                if (meta.filetype == 'image') {
                    $('#upload').trigger('click');
                    $('#upload').on('change', function() {
                        var file = this.files[0];
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            callback(e.target.result, {
                                alt: ''
                            });
                        };
                        reader.readAsDataURL(file);
                    });
                }
            },
            templates: [{
                title: 'Test template 1',
                content: 'Test 1'
            }, {
                title: 'Test template 2',
                content: 'Test 2'
            }],
            content_css: '//www.tinymce.com/css/codepen.min.css'
        });
//        tinymce.init({
//            selector: 'textarea',
//            height: 500,
//            menubar: false,
//            plugins: [
//                'advlist autolink lists link image charmap print preview anchor',
//                'searchreplace visualblocks code fullscreen',
//                'insertdatetime media table contextmenu paste code'
//            ],
//            toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
//            content_css: '//www.tinymce.com/css/codepen.min.css'
//        });
    </script>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">New Post</h3>

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
                                {!! Form::file('photo_id', ['class'=>'form-control', 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('body', 'Body:') !!}
                                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                            </div>
                            <input name="image" type="file" id="upload" class="hidden" onchange="">
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