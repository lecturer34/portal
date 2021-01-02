@extends('layouts.master')
@section('content')
    <h1 class="display-6">Department</h1>

    <hr/>

    <dl>
        <dt>Department Name</dt>
        <dd>{{$department->name}}</dd>

        <dt>Department Description</dt>
        <dd>{{$department->description}}</dd>
    </dl>

    <div class="d-flex">
        <a href="{{route('departments.edit', $department->id)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('departments.destroy', $department->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete</button>
        </form>
    </div>
@endsection