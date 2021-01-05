@extends("layouts.master")
@section("content")
{{--    {{ Breadcrumbs::render('university') }}--}}
    <hr>
    <a href="{{route("employees.create")}}" class = "btn btn-primary">Create</a>
    <br><br>
    <table class = "table table-bordered">
        <tr>
            <th>S/N</th>
            <th>Department</th>
            <th>Employee No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Manage</th>
        </tr>

        @foreach($employees as $employee )
            <tr>
                <td>{{ $loop->index + 1  }}</td>
                <td>{{ $employee->getdepartmentname->name }}</td>
                <td>{{ $employee->employee_no }}</td>
                <td>{{ $employee->firstname }}</td>
                <td>{{ $employee->lastname }}</td>
                <td>{{ $employee->email }}</td>
                <td>
                    <a href="">Edit</a>
                    |
                    <a href="">Delete</a>
                </td>
            </tr>
    </table>
    @endforeach
@endsection()
