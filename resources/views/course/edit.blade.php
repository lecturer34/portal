@extends("layouts.master")
@section("content")
    <h1>Edit Course</h1>
    <hr>
    <form method = "post" action="{{route('courses.update', $course->id)}}">
        @csrf()
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value = "{{$course->id}}">
        <div class="mb-3">
            <label for="name" class="form-label">Course Code</label>
            <input type="text" name = "code" class="form-control" value = "{{ $course->code }}">
            @error("code")
            <div class = "alert alert-danger">
                {{ $errors->first("code")  }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Course Title</label>
            <input type="text" name ="title" class="form-control" value="{{$course->title}}">
            @error("title")
            <div class = "alert alert-danger">
                {{ $errors->first("title")  }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="creditunit" class="form-label">Credit Unit</label>
            <input type="text" name ="creditunit" class="form-control" value="{{$course->creditunit}}">
            @error("creditunit")
            <div class = "alert alert-danger">
                {{ $errors->first("creditunit")  }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Save</button>
            <a href="{{ route('department.courses', session('department_id')) }}" class = "btn">Cancel</a>
        </div>
    </form>
@endsection
