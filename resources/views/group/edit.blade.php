@extends("layouts.master")
@section("content")
    <h1>Edit Group</h1>
    <hr>
    <form method = "POST" action="{{route('groups.update', $group->id)}}">
        {{csrf_field()}}
        {{ method_field('PATCH') }}
        <div class="mb-3">
            <label for="label" class="form-label">Group Label</label>
            <input type="text" class="form-control" value = "G{{$group->label}}" disabled="disabled">
            <input type="hidden" name = "label" class="form-control" value = "{{$group->label}}">
        </div>
        <div class="mb-3">
            <label for="size" class="form-label">Size</label>
            <input type="text" name = "size" class="form-control" value = "{{ $group->size }}">
            @error("size")
                <div class = "alert alert-danger">
                    {{ $errors->first("size")  }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Save</button>
            <a href="{{ route('course.groups', session('course_id')) }}" class = "btn">Cancel</a>
        </div>
    </form>
@endsection
