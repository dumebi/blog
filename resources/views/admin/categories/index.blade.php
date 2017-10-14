@extends('layouts.admin')

@section('content')
    @if(Session::has('deleted_category'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{session('deleted_category')}}
        </div>
        @endif
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Categories</h3>

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
                            <th>Name</th>
                            <th>Created</th>
                            <th>Updated</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($categories)
                            @foreach($categories as $category)
                                <tr>
                                    <td><a href="{{route('categories.edit', $category->id)}}">{{$category->name}}</a></td>
                                    <td>{{$category->created_at->diffForHumans()}}</td>
                                    <td>{{$category->updated_at->diffForHumans()}}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer with-border">
                    <a class="btn btn-default pull-right" href="{{route('categories.create')}}"><i class="fa fa-plus"></i> New Category</a>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection