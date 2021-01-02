@extends("layouts.master")
@section("content")
    {{Breadcrumbs::render('school', $school)}}
    <hr>
    <a href="{{route('departments.create') }}" class="btn btn-primary" >Create</a>
    @php
        session(['school_id' => $school->id]);
    @endphp
    <br><br>
    <table class = "table table-bordered">
        <tr>
            <th>S/N</th>
            <th>Department Name</th>
            <th>Department Description</th>
            <th>Manage</th>
        </tr>

        @foreach($departments as $department )
            <tr>
                <td>{{ $loop->index + 1  }}</td>
                <td>
                    <a href="{{route('department.courses', $department)}}">
                        {{ $department->name }}
                    </a>

                </td>
                <td>{{ $department->description }}</td>
                <td>
                    <a href="{{ route("departments.edit", $department->id)  }}">Edit</a>
                    |
                    <a href="{{ route("departments.destroy", $department->id)  }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
