@extends('layouts.master')
@section('content')
    <h1 class="display-6">School</h1>

    <hr/>

    <dl>
        <dt>School Name</dt>
        <dd>{{$school->name}}</dd>

        <dt>Last Name</dt>
        <dd>{{$school->description}}</dd>
    </dl>

    <div class="d-flex">
        <a href="{{route('schools.edit', $school->id)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('schools.destroy', $school->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete</button>
        </form>
    </div>
@endsection