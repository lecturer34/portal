@extends("layouts.master")
@section("content")
    {{ Breadcrumbs::render('university') }}
    <hr>
    <a href="{{route("schools.create")}}" class = "btn btn-primary">Create</a>
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
                <td>
                    <a href="{{route('school.departments', $school)}}">{{ $school->name }}</a>
                </td>
                <td>{{ $school->description }}</td>
                <td>
                    <a href="{{ route("schools.edit", $school->id)  }}">Edit</a>
                    |
                    <a href="{{ route("schools.destroy", $school->id)  }}">Delete</a>
                </td>
            </tr>
        @endforeach
@endsection()