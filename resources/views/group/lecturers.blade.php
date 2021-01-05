@extends("layouts.master")
@section("content")
    {{ Breadcrumbs::render('group', $group, "group.lecturers")  }}
    <hr>
    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-lecturer">
        Add Lecturer
    </a>
    @php
        session(['group_id' => $group->id]);
    @endphp
    <br><br>
    <table class = "table table-bordered">
        <tr>
            <th>S/N</th>
            <th>First Name</th>
            <th>Surname</th>
            <th>Othernames</th>
            <th></th>
        </tr>
        <tbody id = "lecturers-list">
        @foreach($lecturers as $lecturer )
            <tr>
                <td>{{ $loop->index + 1  }}</td>
                <td>{{ $lecturer->firstname }}</td>
                <td>{{ $lecturer->surname }}</td>
                <td>{{ $lecturer->othernames }}</td>
                <td>
                    <a href="">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
    @include("group_lecturer.create")
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

                $("#lecturer").html("<option value = ''>loading...</option>");
                $.ajax({
                    url: "/getlecturers/" + $("#department").val() //Should be changed to a named route
                }).done(function(data){
                    options = "<option value = ''>--select department--</option>";
                    $.each(data, function(idx, val){
                        fullname = val.firstname + " " + val.surname;
                        options = options + `<option value='${val.id}'>${fullname}</option>`;
                    });
                    $("#lecturer").html(options);
                });
            });


            $(document).on("click", "#save-lecturer", function(){
                //Loading...

                $.ajax({
                    method: "POST",
                    url: "/group/"+$("#group").val()+"/lecturer/create",
                    data: {
                        _token : $("input[name='_token']").val(),
                        lecturer_id: $("#lecturer").val()
                    }
                }).done(function(data){
                    if (data != -1){
                        $("#add-lecturer").modal('hide');
                        console.log(data);
                        rows = "";
                        $.each(data, function(idx, val){
                            newrow = `<tr>
                                            <td>${idx + 1}</td>
                                            <td>${val.firstname}</td>
                                            <td>${val.surname}</td>
                                            <td>${val.othernames}</td>
                                       </tr>`;
                            rows = rows + newrow;
                        });
                        $("#lecturers-list").html(rows);
                    }

                });
            });


                 {{--$(document).on("click", "#save-lecturer", function(){--}}
                {{--$.ajax({--}}
                    {{--url: "{{route("")}}",--}}
                    {{--type: "POST",--}}
                    {{--data: {--}}

                    {{--}--}}
                {{--}).done(function(){--}}

                {{--});--}}
                {{--var row = `<tr>--}}
                                {{--<td>#</td>--}}
                                {{--<td>myname</td>--}}
                                {{--<td>myname</td>--}}
                                {{--<td>myname</td>--}}
                                {{--<td>--}}
                                    {{--<a href="">Delete</a>--}}
                                {{--</td>--}}
                           {{--</tr>`;--}}
                {{--$("#lecturers-list").append(row);--}}
            {{--});--}}
        });
    </script>
@endsection