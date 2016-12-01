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
            <!-- /.box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All Posts</h3>
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
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection