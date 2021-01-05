@extends("layouts.master")
@section("content")
{{--    {{ Breadcrumbs::render('university') }}--}}
    <hr>
    <a href="{{route("venues.create")}}" class = "btn btn-primary">Create</a>
    <br><br>
    <table class = "table table-bordered">
        <tr>
            <th>S/N</th>
            <th>Faculty</th>
            <th>Department</th>
            <th>Capacity</th>
            <th>Type</th>
            <th>Multimedia</th>
            <th>Status</th>
            <th>Manage</th>
        </tr>

        @foreach($venues as $venue )
            <tr>
                <td>{{ $loop->index + 1  }}</td>
                <td>
                    <a href="">{{ $venue->getschoolschool->name}}</a>
                </td>
                <td>{{ $venue->getdepartmentname->name }}</td>
                <td>{{ $venue->capacity }}</td>
                <td>{{ $venue->type }}</td>
                <td>{{ $venue->has_multimedia }}</td>
                <td>{{ $venue->status }}</td>
                <td>
                    <a href="">Edit</a>
                    |
                    <a href="">Delete</a>
                </td>
            </tr>
    </table>
    @endforeach
@endsection()
