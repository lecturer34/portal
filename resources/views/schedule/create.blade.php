@extends("layouts.master")
@section("content")
    <h1>Create Schedule</h1>
    <hr>
    https://www.youtube.com/watch?v=6MgOHuxz2Ow
    <form method = "post" action="{{route('groups.store')}}">
        @csrf()
        <div class="mb-3">
            <label for="school" class="form-label">School</label>
            <select name="school" class = "form-control">
                <option value="">--select school--</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="school" class="form-label">Department</label>
            <select name="department" class = "form-control">
                <option value="">--select department--</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="school" class="form-label">Venue</label>
            <select name="department" class = "form-control">
                <option value="">--select venue--</option>
            </select>
        </div>

        <div class="mb-3">
            <div class="row">
                <div class = "col-md-6">
                    <label for="stime" class="form-label">Begins At</label>
                    <input type="text" class="form-control">
                </div>
                <div class = "col-md-6">
                    <label for="etime" class="form-label">Ends At</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Duration</label>
            ...
        </div>





        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Save</button>
            <a href="{{route("group.schedules", session("group_id"))}}" class="btn">Cancel</a>
        </div>
    </form>
@endsection()