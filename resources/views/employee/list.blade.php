@extends("layouts.master")
@section("content")
{{--    {{ Breadcrumbs::render('university') }}--}}
    <hr>
    <a href="{{route("employees.create")}}" class = "btn btn-primary">Create</a>
    <br><br>
@if (session('success'))
    <div class="alert alert-info col-4">
        <i class="fa fa-check"></i> {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger col-4">
        <i class="fa fa-check"></i> {{ session('error') }}
    </div>
@endif
    <table class="table table-bordered table-striped" id="employee_table">
        <thead>
        <tr>
            <th>S/N</th>
            <th>Staff Photo</th>
            <th>Department</th>
            <th>Rank</th>
            <th>Employee No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Manage</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee )
            <tr>
                <td>{{ $loop->index + 1  }}</td>
                <td><img src="{{asset('employeepix/'.$employee->photourl)}}" alt="Employee Picture"  style="width:50px; height: 50px"/></td>
                <td>{{ $employee->getdepartmentname->name }}</td>
                <td>{{ $employee->getrankname->name }}</td>
                <td>{{ $employee->employee_no }}</td>
                <td>{{ $employee->firstname }}</td>
                <td>{{ $employee->lastname }}</td>
                <td>{{ $employee->email }}</td>
                <td>
                    <a  href="{{ route("employees.edit", $employee->id)  }}">Edit</a>
                    |
                    <a href="{{ route("employees.destroy", $employee->id)  }}">Delete</a>
                </td>
            </tr>
        @endforeach
            </tbody>
    </table>
@endsection()

@section('js')
    <script>
        $('#employee_table').dataTable();
    </script>
@endsection
