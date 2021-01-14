@extends("layouts.master")
@section("content")
    <h1>Edit Venue</h1>
    <hr>
        <form method = "POST" action="{{route('venues.update', $venue->id)}}" style="width: 500px">
        @csrf()
            {{ method_field('PATCH') }}
        <div class="mb-3">
            <label for="school" class="form-label">School Name</label>
            <select name="school_id" class="form-control" required>
                @foreach($schools as $school)
                    <option value="{{$school->id}}"  @if ($school->id == $venue->school_id) selected @endif>{{$school->name}}</option>
                @endforeach
            </select>
            @error("school_id")
            <div class = "alert alert-danger">
                {{ $errors->first('school_id') }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="department" class="form-label">Department Name</label>
            <select name="department_id" class="form-control" required>
                @foreach($departments as $department)
                    <option value="{{$department->id}}" @if ($department->id == $venue->department_id) selected @endif >{{$department->name}}</option>
                @endforeach
            </select>
            @error("department_id")
            <div class = "alert alert-danger">
                {{ $errors->first('department_id') }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{$venue->name}}">
            @error("name")
            <div class = "alert alert-danger">
                {{  $errors->first("name") }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="text" name="capacity" class="form-control" value="{{$venue->capacity}}">
            @error("capacity")
            <div class = "alert alert-danger">
                {{  $errors->first("capacity") }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select name="type" class="form-control">
                <option value="">--Select Type--</option>
                <option value="hall" @if ('hall' == $venue->type) selected @endif>Hall</option>
                <option value="theater" @if ('theater' == $venue->type) selected @endif>Theater</option>
                <option value="lab" @if ('lab' == $venue->type) selected @endif>Lab</option>
            </select>
            @error("type")
            <div class = "alert alert-danger">
                {{  $errors->first("type") }}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="multimedia" class="form-label">Multimedia</label>
            <select name="has_multimedia" class="form-control">
                <option value="">--Select One--</option>
                <option value="yes" @if ('yes' == $venue->has_multimedia) selected @endif>Yes</option>
                <option value="no" @if ('no' == $venue->has_multimedia) selected @endif>No</option>
            </select>
            @error("has_multimedia")
            <div class = "alert alert-danger">
                {{  $errors->first("has_multimedia") }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Venue Status</label>
            <select name="status" class="form-control">
                <option value="">--Select One--</option>
                <option value="usable" @if ('usable' == $venue->status) selected @endif>Usable</option>
                <option value="unusable" @if ('unusable' == $venue->status) selected @endif>Unusable</option>
            </select>
            @error("status")
            <div class = "alert alert-danger">
                {{  $errors->first("status") }}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Modify</button>
            <a href="{{route("venues.index")}}" class="btn">Cancel</a>
        </div>
    </form>
@endsection
