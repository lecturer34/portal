@extends("layouts.master")
@section("content")
    <h1>Delete</h1>
    <hr>
    <h3>Are you sure, you want to delete this record</h3>
    <form method = "post" action="{{route('school.destroy')}}">
        @csrf()
        <input type="hidden" name="id" value = "{{$school->id}}">
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">School Name</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext"  value="{{$school->name}}">
            </div>
        </div>
        <div class="mb-3">
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">School Desc</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext"  value="{{$school->description}}">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Yes</button>
            |
            <a href = "{{route("school.list")}}" class = "btn btn-primary">No</a>
        </div>
    </form>
@endsection