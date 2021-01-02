@extends('layouts.master')
@section('content')
    <h1 class="display-6">Delete Course</h1>

    <hr/>

    <dl>
        <dt>Course Code</dt>
        <dd>{{$course->code}}</dd>

        <dt>Course Title</dt>
        <dd>{{$course->title}}</dd>

        <dt>Course Unit</dt>
        <dd>{{$course->creditunit}}</dd>
    </dl>

    <div class="d-flex">
        <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
            {{ method_field('DELETE') }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete</button>
            <a href="{{route('department.courses', session('department_id'))}}" class = "btn">Cancel</a>
        </form>
    </div>
@endsection