@extends('layouts.master')
@section('content')
    <h1 class="display-6">Venue</h1>

    <hr/>

    <dl>
        <dt>Department Name</dt>
        <dd>{{$department->name}}</dd>

    </dl>

    <div class="d-flex">
        <a href="{{route('departments.edit', $department->id)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('venues.destroy', $venue->id) }}" method="POST">
            {{ method_field('DELETE') }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete</button>
        </form>
    </div>
@endsection
