@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}


                        <div class="widget">
                            <div class="widget-title"><h6>Menu</h6></div>
                            <ul>
                                <li>Settings</li>
                                <li><a href="{{route('rank.list')}}" class='list-group-item '>Rank<span><i class="fa fa-cogs"></i></span></a></li>
                                <li><a href="{{route('employee.list')}}" class='list-group-item'>Employee<span><i class="fa fa-dollar"></i></span></a></li>
                                <li><a href="{{route('venue.list')}}" class='list-group-item'>Venue<span><i class="fa fa-dollar"></i></span></a></li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
