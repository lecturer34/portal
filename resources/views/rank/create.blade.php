@extends("layouts.master")
@section("content")
    <h1>Create</h1>
    <hr>
    <form method = "post" action="{{route('ranks.store')}}" style="width: 500px">
        @csrf()
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="">
            @error("name")
            <div class = "alert alert-danger">
                {{  $errors->first("name") }}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Save</button>
            <a href="{{route("ranks.index")}}" class="btn">Cancel</a>
        </div>
    </form>
@endsection
