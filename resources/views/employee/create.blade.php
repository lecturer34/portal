@extends("layouts.master")
@section("content")
    <h1>Create</h1>
    <hr>
    <form method = "post" action="{{route('employees.store')}}" style="width: 500px">
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
            <label for="employee_no" class="form-label">Employee Number</label>
            <input type="text" name="employee_no" class="form-control" value="" required>
            @error("employee_no")
            <div class = "alert alert-danger">
                {{  $errors->first("employee_no") }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="firstname" class="form-label">FirstName</label>
            <input type="text" name="firstname" class="form-control" value="" required>
            @error("firstname")
            <div class = "alert alert-danger">
                {{  $errors->first("firstname") }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">LastName</label>
            <input type="text" name="lastname" class="form-control" value="" required>
            @error("lastname")
            <div class = "alert alert-danger">
                {{  $errors->first("lastname") }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="" required>
            @error("email")
            <div class = "alert alert-danger">
                {{  $errors->first("email") }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Save</button>
            <a href="{{route("employees.index")}}" class="btn">Cancel</a>
        </div>
    </form>
@endsection
