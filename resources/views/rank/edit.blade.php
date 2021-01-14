@extends("layouts.master")
@section("content")
    <h1>Edit rank</h1>
    <hr>
        <form method = "POST" action="{{route('ranks.update', $rank->id)}}" style="width: 500px">
        @csrf()
            {{ method_field('PATCH') }}
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{$rank->name}}">
            @error("name")
            <div class = "alert alert-danger">
                {{  $errors->first("name") }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Modify</button>
            <a href="{{route("ranks.index")}}" class="btn">Cancel</a>
        </div>
    </form>
@endsection
