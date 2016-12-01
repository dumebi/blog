@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3>
                        Edit User
                    </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            @include('includes.form_error');
                            
                            <div class="col-md-3">
                                <img src="{{$user->photo ? $user->photo->path : '/images/avatar.png'}}" class="img-responsive img-rounded" alt="">
                            </div>
                            <!-- /.form-group -->
                            <div class="col-md-9">
                                {!! Form::model($user, ['method'=>'patch', 'action'=>['AdminUsersController@update', $user->id], 'files'=> true]) !!}
                                {!! Form::token() !!}
                                <div class="form-group">
                                    {!! Form::label('name', 'Name:') !!}
                                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('email', 'Email:') !!}
                                    {!! Form::email('email', null, ['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('role_id', 'Role:') !!}
                                    {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('is_active', 'Status:') !!}
                                    {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('photo_id', 'Choose Image:') !!}
                                    {!! Form::file('photo_id', ['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('password', 'Password:') !!}
                                    {!! Form::password('password', ['class' => 'form-control']) !!}
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
                                    </div>
                                </div>


                                {!! Form::close() !!}

                                {!! Form::model($user, ['method'=>'DELETE', 'action'=>['AdminUsersController@update', $user->id]]) !!}
                                <div class="col-md-6">
                                    <div class="form-group pull-right">
                                        {!! Form::submit('Delete User', ['class'=>'btn btn-danger']) !!}
                                    </div>
                                </div>
                                {!! Form::close() !!}

                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->


    </div><!-- /.row -->
@endsection