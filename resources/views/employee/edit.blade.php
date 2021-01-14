@extends("layouts.master")
@section("content")
    <h1>Edit</h1>
    <hr>
        <form method = "POST" action="{{route('employees.update', $employee->id)}}" style="width: 500px">
            @csrf()
            {{ method_field('PATCH') }}
        <div class="mb-3">
            <label for="department" class="form-label">Department Name</label>
            <select name="department_id" class="form-control" required>
                @foreach($departments as $department)
                    <option value="{{$department->id}}" @if ($department->id == $employee->department_id) selected @endif >{{$department->name}}</option>
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
            <input type="text" name="employee_no" class="form-control" value="{{$employee->employee_no}}" required>
            @error("employee_no")
            <div class = "alert alert-danger">
                {{  $errors->first("employee_no") }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="rank" class="form-label">Rank</label>
            <select name="rank_id" class="form-control" required>
                @foreach($ranks as $rank)
                    <option value="{{$rank->id}}" @if ($rank->id == $employee->rank_id) selected @endif >{{$rank->name}}</option>
                @endforeach
            </select>
            @error("rank_id")
            <div class = "alert alert-danger">
                {{ $errors->first('rank_id') }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="firstname" class="form-label">FirstName</label>
            <input type="text" name="firstname" class="form-control" value="{{$employee->firstname}}" required>
            @error("firstname")
            <div class = "alert alert-danger">
                {{  $errors->first("firstname") }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">LastName</label>
            <input type="text" name="lastname" class="form-control" value="{{$employee->lastname}}" required>
            @error("lastname")
            <div class = "alert alert-danger">
                {{  $errors->first("lastname") }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="{{$employee->email}}" required>
            @error("email")
            <div class = "alert alert-danger">
                {{  $errors->first("email") }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="photourl" class="form-label">Upload photo</label>
            <input type="file" name="photourl" class="form-control-file" value="" >
            {{--  @error("photourl")
              <div class = "alert alert-danger">
                  {{  $errors->first("photourl") }}
              </div>
              @enderror--}}
        </div>


        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Modify</button>
            <a href="{{route("employees.index")}}" class="btn">Cancel</a>
        </div>
    </form>
@endsection
