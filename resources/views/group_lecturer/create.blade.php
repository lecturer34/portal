<div class="modal fade" id="add-lecturer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Lecturer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method = "post" action="">
                    <div class="mb-3">
                        @csrf()
                        <input type="hidden" name = "group" id = "group" value = "{{$group->id}}">
                        <label for="school" class="form-label">School</label>
                        <select name="school" id="school" class = "form-control">
                            <option value="">--select school--</option>
                            @foreach($schools as $school)
                                <option value="{{$school->id}}">{{$school->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="school" class="form-label">Department</label>
                        <select name="department" id = "department" class = "form-control">
                            <option value="">--select department--</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="lecturer" class="form-label">Lecturer</label>
                        <select name="lecturer" id = "lecturer" class = "form-control">
                            <option value="">--select lecturer--</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id = "save-lecturer">Save changes</button>
            </div>
        </div>
    </div>
</div>



