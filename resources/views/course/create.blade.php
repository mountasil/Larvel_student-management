@extends('layouts/layout')

@section('content')
<div>
    <div class="float-start">
        <h4 class="pb-3">Add New Course</h4>
    </div>
    <div class="float-end">
        <a href="{{ route('course.index') }}" class="btn btn-info">
            <i class="fa fa-arrow-left"></i> All Courses
        </a>
    </div>
    <div class="clearfix"></div>
</div>

<div class="card">
    <form class="p-3" action="{{ route('course.store') }}" method="POST">
        <!-- csrf protection -->
        @csrf
        <div class="mb-3 row">
            <label for="course_name" class="col-sm-2 col-form-label">Course Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="course_name" name="course_name" placeholder="Enter Course Name" required>
            </div>
        </div>

        <a href="{{ route('course.index') }}" class="btn btn-secondary mr-2">
            <i class="fa fa-arrow-left"></i> Cancel
        </a>
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-check"></i> Save
        </button>
    </form>
</div>

@endsection