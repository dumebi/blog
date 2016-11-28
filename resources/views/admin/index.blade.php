@extends('admin.admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h1>
                        New Courses
                    </h1>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- /.form-group -->
                            <form id="form1" name="form1" method="post" enctype="multipart/form-data" action="all_courses.php">
                                <div class="form-group">
                                    <label for="name">Course Name</label>
                                    <input name="name" class="form-control" type="text" id="name" placeholder="Course Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="type">Course Type</label>
                                    <select class="form-control" name="type" required="">
                                        <option  value="online">Online</option>
                                        <option  value="classroom">Classroom</option>
                                        <option  value="both">Both</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Upload Icon </label>
                                    <input type="file" name="image" class="form-control" accept="image/*" required/>
                                </div>
                                <div class="form-group">
                                    <label for="course_module">Course Modules (Number)</label>
                                    <input name="course_module" class="form-control" type="text" id="course_module" placeholder="Course Module (Number)" required>
                                </div>
                                <div class="form-group">
                                    <label for="prof_point">Professional Points (Optional)</label>
                                    <input name="prof_point" class="form-control" type="text" id="prof_point" placeholder="Professional Points (Optional)">
                                </div>
                                <div class="form-group">
                                    <label for="speciality">Speciality</label>
                                    <input name="speciality" class="form-control" type="text" id="speciality" placeholder="Speciality" required>
                                </div>
                                <div class="form-group">
                                    <label for="cost">Course Cost</label>
                                    <input name="cost" class="form-control" type="text" id="cost" placeholder="Course Cost" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Course Description</label>
                                    <textarea name="description" class="form-control" type="text" id="mytextarea" required></textarea>
                                </div>
                                <input type="submit" name="insertButton" id="insertButton" value="Insert Course"  class="btn btn-sm btn-default btn-flat pull-right">
                            </form>

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->


    </div><!-- /.row -->
   @endsection