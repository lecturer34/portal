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




    <div class="row" id="lecturers-list">
        @foreach($lecturers as $lecturer )
            <div class="col-md-3" id = "card{{$lecturer->id}}">
                <div class="card mb-3 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="https://www.oasdom.com/wp-content/uploads/2018/04/Oasdom-rich-kid-celebrity-in-Nigeria.jpg" data-holder-rendered="true">
                    <div class="card-body">
                        <h3>{{$lecturer->firstname}} {{$lecturer->surname}}</h3>
                        <p class="card-text">Lecturer II</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-danger remove-lecturer" id = "{{$lecturer->id}}">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </div>





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
                        cards = "";
                        $.each(data, function(idx, val){
                            newcard = `
                                        <div class="col-md-3" id = "card${$("#lecturer").val()}">
                                            <div class="card mb-3 box-shadow">
                                                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="https://www.oasdom.com/wp-content/uploads/2018/04/Oasdom-rich-kid-celebrity-in-Nigeria.jpg" data-holder-rendered="true">
                                                <div class="card-body">
                                                    <h3>${val.firstname}&nbsp;${val.surname}</h3>
                                                    <p class="card-text">Lecturer II</p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-sm btn-outline-danger remove-lecturer" id = "${$("#lecturer").val()}">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            `;
                            cards = cards + newcard;
                        });
                        $("#lecturers-list").html(cards);
                    }

                });
            });


            $(document).on("click", ".remove-lecturer", function(){
                card = "#card"+$(this).prop("id");
                $.ajax({
                    method: "POST",
                    url: "/group/{{session('group_id')}}/lecturer/delete",
                    data:{
                        lecturer: $(this).prop("id"),
                        _token: "{{csrf_token()}}"
                    }
                }).done(function(data){
                    $(card).remove();
                });

            });


        });
    </script>
@endsection