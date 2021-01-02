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
        <form action="{{ route('schools.destroy', $school->id) }}" method="POST">
            {{ method_field('DELETE') }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete</button>
            <a href="{{ route('university.schools')  }}" class = "btn">Cancel</a>
        </form>
    </div>
@endsection