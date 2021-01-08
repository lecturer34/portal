@extends("layouts.master")
@section("content")
    <h1>Create Schedule</h1>
    <hr>
    <form method = "post" action="{{route('schedules.store')}}">
        @csrf()
        <div class="mb-3">
            <label for="school" class="form-label">School</label>
            <select name="school" id="school" class = "form-control">
                <option value="">--select school--</option>
                @foreach($schools as $school)
                    <option value="{{$school->id}}">{{$school->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <select name="department" id="department" class = "form-control">
                <option value="">--select department--</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="venue" class="form-label">Venue</label>
            <select name="venue" id = "venue" class = "form-control">
                <option value="">--select venue--</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="day" class="form-label">Day</label>
            <select name="day" class = "form-control">
                <option value="">--select day--</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
            </select>
        </div>

        <div class="mb-3">
            <div class="row">
                <div class = "col-md-6">
                    <label for="stime" class="form-label">Begins At</label>
                    <input type="text" name="stime" class="form-control">
                </div>
                <div class = "col-md-6">
                    <label for="etime" class="form-label">Ends At</label>
                    <input type="text" name="etime" class="form-control">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <button type = "submit" class = "btn btn-primary">Save</button>
            <a href="{{route("group.schedules", session("group_id"))}}" class="btn">Cancel</a>
        </div>
    </form>
    <script>
        $(document).ready(function(){


            $(document).on("change", "#school", function(){

                if ( !$("#school").val() )
                    return;

                $("#department").html("<option value = ''>loading...</option>");
                $.ajax({
                    url: "/getdepartments/" + $("#school").val() //Should be changed to a named route
                }).done(function(data){
                    options = "<option value = ''>--select school--</option>";
                    $.each(data, function(idx, val){
                        options = options + `<option value = '${val.id}'>${val.name}</option>`;
                    });
                    $("#department").html(options);
                });
            });


            $(document).on("change", "#department", function(){

                if ( !$("#department").val() )
                    return;

                $("#venue").html("<option value = ''>loading...</option>");
                $.ajax({
                    url: "/getvenues/" + $("#department").val() //Should be changed to a named route
                }).done(function(data){
                    options = "<option value = ''>--select venue--</option>";
                    $.each(data, function(idx, val){
                        options = options + `<option value='${val.id}'>${val.name}</option>`;
                    });
                    $("#venue").html(options);
                });
            });
        });
    </script>
@endsection()