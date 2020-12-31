@extends("layouts.master")
@section("content")
    <h1>Edit Department</h1>
    <hr>
    @if($errors->any())
        <div class="alert-danger has-error col-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success_msg'))
        <div class="alert alert-info col-4">
            <i class="fa fa-check"></i> {{ session('success_msg') }}
        </div>
    @endif
    <form method = "post" action="{{route('department.update')}}">
        @csrf()
        <input type="hidden" name="id" value = "{{$department->id}}">
        <div class="mb-3">
            <label for="name" class="form-label">Department Name</label>
            <input type="text" name = "name" class="form-control" value = "{{ $department->name }}" required>
        </div>
        <div class="mb-3">
            <label for="code" class="form-label">Department Code</label>
            <input type="text" name ="code" class="form-control" value="{{$department->code}}" required>
        </div>

        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Save</button>
        </div>
    </form>
@endsection
