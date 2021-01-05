@extends("layouts.master")
@section("content")
    <h1>Create</h1>
    <hr>
    <form method = "post" action="{{route('venues.store')}}" style="width: 500px">
        @csrf()
        <div class="mb-3">
            <label for="department" class="form-label">Department Name</label>
            <select name="department_id" class="form-control" required>
                @foreach($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                @endforeach
            </select>
            @error("department_id")
            <div class = "alert alert-danger">
                {{ $errors->first('department_id') }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="text" name="capacity" class="form-control" value="">
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
                <option value="hall">Hall</option>
                <option value="theater">Theater</option>
                <option value="lab">Lab</option>
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
                <option value="yes">Yes</option>
                <option value="no">No</option>
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
                <option value="usable">Usable</option>
                <option value="unusable">Unusable</option>
            </select>
            @error("status")
            <div class = "alert alert-danger">
                {{  $errors->first("status") }}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Save</button>
            <a href="{{route("venues.index")}}" class="btn">Cancel</a>
        </div>
    </form>
@endsection
