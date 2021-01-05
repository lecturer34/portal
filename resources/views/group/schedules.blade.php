@extends("layouts.master")
@section("content")
    {{ Breadcrumbs::render('group', $group, "group.schedules")  }}
    <hr>
        <a href="{{route('schedules.create') }}" class="btn btn-primary" >Create</a>
    @php
        session(['group_id' => $group->id]);
    @endphp
    <br><br>
    <table class = "table table-bordered">
        <tr>
            <th>S/N</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Location</th>
            <th></th>
        </tr>

        @foreach($schedules as $schedule )
            <tr>
                <td>{{ $loop->index + 1  }}</td>
                <td>
                    {{ $schedule->stime }}
                </td>
                <td>{{ $schedule->etime }}</td>
                <td>{{ $schedule->venue_id }}</td>
                <td>
                    <a href="">Edit</a>
                    |
                    <a href="">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection