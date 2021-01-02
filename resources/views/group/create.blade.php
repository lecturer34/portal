@extends("layouts.master")
@section("content")
    <h1>Create Group</h1>
    <hr>
    <form method = "post" action="{{route('groups.store')}}">
        @csrf()
        <div class="mb-3">
            <label for="size" class="form-label">Group Size</label>
            <input type="text" name = "size" class="form-control">
        </div>
        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Save</button>
            <a href="{{route("course.groups", session("course_id"))}}" class="btn">Cancel</a>
        </div>
    </form>
@endsection()