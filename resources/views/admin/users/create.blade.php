@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3>
                        New User
                    </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- /.form-group -->
                            @include('includes.form_error');
                            {!! Form::open(['method'=>'post', 'action'=>'AdminUsersController@store', 'files'=> true]) !!}
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
                                {!! Form::select('role_id', ['' => 'Choose Options']+$roles, null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('is_active', 'Status:') !!}
                                {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('photo_id', 'Choose Image:') !!}
                                {!! Form::file('photo_id', ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                    {!! Form::label('password', 'Password:') !!}
                                    {!! Form::password('password', ['class' => 'form-control']) !!}
                             </div>

                            <div class="form-group">
                                {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}



                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->


    </div><!-- /.row -->
@endsection