@extends("layouts.master")
@section("content")
    <h1>Delete Department Record</h1>
    <hr>
    <h3>Are you sure, you want to delete this record</h3>
    <form method = "post" action="{{route('department.destroy')}}">
        @csrf()
        <input type="hidden" name="id" value = "{{$department->id}}">
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Department Name</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext"  value="{{$department->name}}">
            </div>
        </div>
        <div class="mb-3">
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Department Code</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext"  value="{{$department->code}}">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Yes</button>
            |
            <a href = "{{route("department.list")}}" class = "btn btn-primary">No</a>
        </div>
    </form>
@endsection
