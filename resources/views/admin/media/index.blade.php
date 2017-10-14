@extends('layouts.admin')

@section('content')
    @if(Session::has('deleted_media'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{session('deleted_media')}}
        </div>
    @endif
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Media</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($photos)
                            @foreach($photos as $photo)
                                <tr>
                                    <td> <img height="50" src="{{$photo->path ? $photo->path : '/images/avatar.png'}}" alt=""></td>
                                    <td>{{$photo->name}}</td>
                                    <td>{{$photo->created_at->diffForHumans()}}</td>
                                    <td>{{$photo->updated_at->diffForHumans()}}</td>
                                    <td>

                                        {!! Form::model($photo, ['method'=>'DELETE', 'action'=>['AdminMediaController@destroy', $photo->id]]) !!}
                                        <div class="col-md-6">
                                            <div class="form-group pull-right">
                                                {!! Form::submit('Delete Media', ['class'=>'btn btn-danger']) !!}
                                            </div>
                                        </div>
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                {{--@if($photos->count() < 7)--}}
                <div class="box-footer with-border">
                    <a class="btn btn-default pull-right" href="{{route('media.create')}}"><i class="fa fa-plus"></i> Add Banner</a>
                </div>
                    {{--@endif--}}
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection