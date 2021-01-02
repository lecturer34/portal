@extends("layouts.master")
@section("content")
    <h1>Edit</h1>
    <hr>
    <form method = "POST" action="{{ route("schools.update", $school->id) }}">
        @csrf()
        {{ method_field('PATCH') }}
        <div class="mb-3">
            <label for="name" class="form-label">School Name</label>
            <input type="text" name = "name" class="form-control" value = "{{ $school->name }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">School Desc</label>
            <textarea class="form-control" name="description" rows="3">{{$school->description}}</textarea>
        </div>

        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Save</button>
            <a href="{{ route('university.schools')  }}" class = "btn">Cancel</a>
        </div>
    </form>
@endsection