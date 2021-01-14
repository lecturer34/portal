@extends('layouts.master')
@section('content')
    <h1 class="display-6">Delete Employee Record</h1>
    <hr/>
    <dl>
        <dt>Department Name</dt>
        <dd>{{$employee->getdepartmentname->name}}</dd>
    </dl>
    <dl>
        <dt>Employee Rank</dt>
        <dd>{{$employee->getrankname->name}}</dd>
    </dl>
    <dl>
        <dt>Employee Number</dt>
        <dd>{{$employee->employee_no}}</dd>

        <dt>Firstname</dt>
        <dd>{{$employee->firstname}}</dd>

        <dt>Lastname</dt>
        <dd>{{$employee->lastname}}</dd>

        <dt>Email</dt>
        <dd>{{$employee->email}}</dd>
    </dl>

    <div class="d-flex">
        <a href="{{route('employees.edit', $employee->id)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
            {{ method_field('DELETE') }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete</button>
        </form>
    </div>
@endsection
