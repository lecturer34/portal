@extends("layouts.master")
@section("content")
    <h1>List</h1>
    <hr>
    <br>
    <a href="{{route("school.create")}}" class="btn btn-primary">Create</a>
    <br><br>
    <table class = "table table-bordered">
        <tr>
            <th>S/N</th>
            <th>School Name</th>
            <th>School Description</th>
            <th>Manage</th>
        </tr>

        @foreach($schools as $school )
            <tr>
                <td>{{ $loop->index + 1  }}</td>
                <td>{{ $school->name }}</td>
                <td>{{ $school->description }}</td>
                <td>
                    <a href="{{ route("school.edit", $school->id)  }}">Edit</a>
                    |
                    <a href="{{ route("school.delete", $school->id)  }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection