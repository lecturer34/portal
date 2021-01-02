@extends("layouts.master")
@section("content")
    <h1>Create</h1>
    <hr>
    <form method = "post" action="{{route('schools.store')}}">
        @csrf()
        <div class="mb-3">
            <label for="name" class="form-label">School Name</label>
            <input type="text" name = "name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">School Desc</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Save</button>
            <a href="{{route("schools.index")}}" class="btn">Cancel</a>
        </div>
    </form>
@endsection