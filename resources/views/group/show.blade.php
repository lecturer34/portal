@extends('layouts.master')
@section('content')
    <h1 class="display-6">Delete Group</h1>

    <hr/>

    <dl>
        <dt>Group ID</dt>
        <dd>D{{$group->id}}</dd>

        <dt>Group Size</dt>
        <dd>{{$group->size}}</dd>
    </dl>

    <div class="d-flex">
        <form action="{{ route('groups.destroy', $group->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete</button>
            <a href="{{route('course.groups', session('course_id'))}}" class = "btn">Cancel</a>
        </form>
    </div>
@endsection