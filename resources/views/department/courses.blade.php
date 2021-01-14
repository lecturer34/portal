@extends("layouts.master")
@section("content")
    {{ Breadcrumbs::render('department', $department) }}
    <hr>
    <a href="{{route('courses.create') }}" class="btn btn-primary" >Create</a>
    @php
        session(['department_id' => $department->id]);
    @endphp
    <br><br>
    <table class = "table table-bordered">
        <tr>
            <th>S/N</th>
            <th>Course Code</th>
            <th>Course Title</th>
            <th>CU</th>
            <th></th>
        </tr>

        @foreach($courses as $course )
            <tr>
                <td>{{ $loop->index + 1  }}</td>
                <td>
                    <a href="{{ route("course.groups", $course->id)  }}">
                        {{ $course->code }}
                    </a>
                </td>
                <td>{{ $course->title }}</td>
                <td>{{ $course->creditunit }}</td>
                <td>
                    <a href="{{ route("courses.edit", $course->id)  }}">Edit</a>
                    |
                    <a href="{{ route("courses.destroy", $course->id)  }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
        {!! $courses->links() !!}
    </div>
@endsection
