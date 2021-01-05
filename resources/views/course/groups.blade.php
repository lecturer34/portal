@extends("layouts.master")
@section("content")
    {{ Breadcrumbs::render('course', $course) }}
    <hr>
    <a href="{{route('groups.create') }}" class="btn btn-primary" >Create</a>
    @php
        session(['course_id' => $course->id]);
    @endphp
    <br><br>
    <table class = "table table-bordered">
        <tr>
            <th>S/N</th>
            <th>Group ID</th>
            <th>Group Size</th>
            <th></th>
        </tr>

        @foreach($groups as $group )
            <tr>
                <td>{{ $loop->index + 1  }}</td>
                <td>
                    G{{ $group->label }}
                    (<a href="{{ route("group.schedules", $group->label) }}">
                        manage schedules
                    </a>
                    |
                    <a href="{{  route("group.lecturers", $group->label) }}">
                        manage lecturers
                    </a>)


                </td>
                <td>{{ $group->size }}</td>
                <td>
                    <a href="{{ route("groups.edit", $group->id)  }}">Edit</a>
                    |
                    <a href="{{ route("groups.show", $group->id)  }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
