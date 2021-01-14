@extends('layouts.master')
@section('content')
    <h1 class="display-6">Venue</h1>

    <hr/>

    <dl>
        <dt>School Name</dt>
        <dd>{{$venue->getschoolschool->name}}</dd>
    </dl>

    <dl>
        <dt>Department Name</dt>
        <dd>{{$venue->getdepartmentname->name}}</dd>
    </dl>

    <dl>
        <dt>Venue</dt>
        <dd>{{$venue->name}}</dd>
        <dt>Capacity</dt>
        <dd>{{$venue->capacity}}</dd>

        <dt>Type</dt>
        <dd>{{$venue->type}}</dd>

        <dt>Multimedia</dt>
        <dd>{{$venue->has_multimedia}}</dd>

        <dt>Status</dt>
        <dd>{{$venue->status}}</dd>
    </dl>

    <div class="d-flex">
        <a href="{{route('venues.edit', $venue->id)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('venues.destroy', $venue->id) }}" method="POST">
            {{ method_field('DELETE') }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete</button>
        </form>
    </div>
@endsection
