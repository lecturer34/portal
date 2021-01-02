@extends("layouts.master")
@section("content")
    <h1>Create course</h1>
    <hr>
    <form method = "post" action="{{route('courses.store')}}">
        @csrf()
        <div class="mb-3">
            <label for="code" class="form-label">Course Code</label>
            <input type="text" name = "code" class="form-control" value = "{{old("code")}}">
            @error("code")
                <div class = "alert alert-danger">
                    {{ $errors->first("code")  }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Course Title</label>
            <input type="text" name = "title" class="form-control" value="{{old("title")}}">
            @error("title")
            <div class = "alert alert-danger">
                {{ $errors->first("title")  }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="creditunit" class="form-label">Course Unit</label>
            <input type="text" name = "creditunit" class="form-control" value="{{old("creditunit")}}">
            @error("creditunit")
            <div class = "alert alert-danger">
                {{ $errors->first("creditunit")  }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Save</button>
            <a href="{{route("department.courses", session("department_id"))}}" class="btn">Cancel</a>
        </div>
    </form>
@endsection()