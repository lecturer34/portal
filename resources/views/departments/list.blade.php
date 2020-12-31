@extends("layouts.master")
@section("content")
    <h1>List</h1>
    <hr>
    <br>
    <a href="{{route("department.create")}}" class="btn btn-primary">Create</a>
    <br><br>
    <table class = "table table-bordered">
        <tr>
            <th>S/N</th>
            <th>Department Name</th>
            <th>Department Code</th>
            <th>Manage</th>
        </tr>

        @foreach($departments as $department )
            <tr>
                <td>{{ $loop->index + 1  }}</td>
                <td>{{ $department->name }}</td>
                <td>{{ $department->code }}</td>
                <td>
                    <a href="{{ route("department.edit", $department->id)  }}">Edit</a>
                    |
                    <a href="{{ route("department.delete", $department->id)  }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
