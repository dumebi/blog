@extends('layouts.admin')

@section('content')
    @if(Session::has('deleted_user'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{session('deleted_user')}}
        </div>
        @endif
    <div class="row">
        <div class="col-xs-12">
            <!-- /.box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All Users</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Updated</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($users)
                            @foreach($users as $user)
                                <tr>
                                    <td><img height="50" src="{{$user->photo ? $user->photo->path : '/images/avatar.png'}}" alt=""></td>
                                    <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role->name}}</td>
                                    <td>{{$user->is_active == 1 ? 'Active' : 'Not active'}}</td>
                                    <td>{{$user->created_at->diffForHumans()}}</td>
                                    <td>{{$user->updated_at->diffForHumans()}}</td>
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