@extends("layouts.master")
@section("content")
    <h1>Edit Department</h1>
    <hr>
    <form method = "POST" action="{{route('departments.update', $department->id)}}">
        @csrf()
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value = "{{$department->id}}">
        <div class="mb-3">
            <label for="name" class="form-label">Department Name</label>
            <input type="text" name = "name" class="form-control" value = "{{ $department->name }}">
        </div>
        <div class="mb-3">
            <label for="code" class="form-label">Department Description</label>
            <input type="text" name ="description" class="form-control" value="{{$department->description}}">
        </div>

        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Save</button>
            <a href="{{ route('school.departments', session('school_id')) }}" class = "btn">Cancel</a>
        </div>
    </form>
@endsection
