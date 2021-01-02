@extends("layouts.master")
@section("content")
    <h1>Create Department</h1>
    <hr>
    <form method = "post" action="{{route('departments.store')}}">
        @csrf()
        <div class="mb-3">
            <label for="name" class="form-label">Department Name</label>
            <input type="text" name = "name" class="form-control" value = "{{ old("name")  }}">
            @error("name")
                <div class = "alert alert-danger">
                    {{  $errors->first("name") }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="code" class="form-label">Department Description</label>
            <textarea class="form-control" name="description" rows="3">{{old("description")}}</textarea>
            @error("description")
                <div class = "alert alert-danger">
                    {{  $errors->first("description") }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Save</button>
            <a href="{{route("school.departments", session("school_id"))}}" class="btn">Cancel</a>
        </div>
    </form>
@endsection
