@extends('layouts.admin')

@section('content')
    @if(Session::has('deleted_post'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{session('deleted_post')}}
        </div>
    @endif
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">All Posts</h3>

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
                            <th>Photo</th>
                            <th>User</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($posts)
                            @foreach($posts as $post)
                                <tr>
                                    <td><img height="50" src="{{$post->photo ? $post->photo->path : '/images/avatar.png'}}" alt=""></td>
                                    <td>{{$post->user->name}}</td>
                                    <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                                    <td><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></td>
                                    <td>{{$post->created_at->diffForHumans()}}</td>
                                    <td>{{$post->updated_at->diffForHumans()}}</td>
                                    <td>
                                        {!! Form::model($post, ['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="form-group pull-right">--}}
                                                {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer with-border">
                    <a class="btn btn-default pull-right" href="{{route('posts.create')}}"><i class="fa fa-plus"></i> New Post</a>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection