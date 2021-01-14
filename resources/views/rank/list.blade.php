@extends("layouts.master")
@section("content")
{{--    {{ Breadcrumbs::render('university') }}--}}
    <hr>
    <a href="{{route("ranks.create")}}" class = "btn btn-primary">Create</a>
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
    <table class = "table table-bordered table-striped" id="rank_table">
        <thead>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Manage</th>
        </tr>
        </thead>
        @foreach($ranks as $rank )
            <tbody>
            <tr>
                <td>{{ $loop->index + 1  }}</td>
                <td>{{ $rank->name }}</td>
                <td>
                    <a  href="{{ route("ranks.edit", $rank->id)  }}">Edit</a>
                    |
                    <a href="{{ route("ranks.destroy", $rank->id)  }}">Delete</a>
                </td>
            </tr>
            </tbody>
    @endforeach
    </table>


@endsection()
@section('js')
    <script>
         $('#rank_table').dataTable();
        // $("#date").datepicker({format: 'yyyy-mm-dd'});
    </script>
@endsection
