@extends("layouts.master")
@section("content")
{{--    {{ Breadcrumbs::render('university') }}--}}
    <hr>
    <a href="{{route("venues.create")}}" class = "btn btn-primary">Create</a>
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
    <table class = "table table-bordered table-striped" id="venue_table">
        <thead>
        <tr>
            <th>S/N</th>
            <th>School</th>
            <th>Department</th>
            <th>Name</th>
            <th>Capacity</th>
            <th>Type</th>
            <th>Multimedia</th>
            <th>Status</th>
            <th>Manage</th>
        </tr>
        </thead>
        @foreach($venues as $venue )
            <tbody>
            <tr>
                <td>{{ $loop->index + 1  }}</td>
                <td>
                    <a href="">{{ $venue->getschoolschool->name}}</a>
                </td>
                <td>{{ $venue->getdepartmentname->name }}</td>
                <td>{{ $venue->name }}</td>
                <td>{{ $venue->capacity }}</td>
                <td>{{ $venue->type }}</td>
                <td>{{ $venue->has_multimedia }}</td>
                <td>{{ $venue->status }}</td>
                <td>
                    <a  href="{{ route("venues.edit", $venue->id)  }}">Edit</a>
                    |
                    <a href="{{ route("venues.destroy", $venue->id)  }}">Delete</a>
                </td>
            </tr>
            </tbody>
    @endforeach
    </table>


@endsection()
@section('js')
    <script>
         $('#venue_table').dataTable();
        // $("#date").datepicker({format: 'yyyy-mm-dd'});
    </script>
@endsection
