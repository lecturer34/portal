@extends('layouts.master')
@section('content')
    <h1 class="display-6">Rank</h1>

    <hr/>
    <dl>
        <dt>Rank</dt>
        <dd>{{$rank->name}}</dd>
    </dl>

    <div class="d-flex">
        <a href="{{route('ranks.edit', $rank->id)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('ranks.destroy', $rank->id) }}" method="POST">
            {{ method_field('DELETE') }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete</button>
        </form>
    </div>
@endsection
