<?php

namespace App\Http\Controllers;


use App\Models\School;
use App\Models\Department;
use App\Models\Lecturer;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupLecturerController extends Controller
{

    public function index($label)
    {
        $group = Group::where('label', $label)->first();
        $lecturers = $group->lecturers;
        $schools = getSchools();
        return view('group.lecturers', compact('lecturers', 'schools', 'group'));
    }

    public function create()
    {
        //
    }

    private function getGroupLecturers($id){
        $group = Group::find($id);
        return $group->lecturers;
    }

    public function store(Group $group, Request $request)
    {
        if ( $group->lecturers->find($request->lecturer_id) ||  $request->lecturer_id == "")
            return -1;
        $group->lecturers()->attach($request->lecturer_id);
        return $this->getGroupLecturers($group->id);
    }

    public function destroy(Group $group, Request $request)
    {
        $group->lecturers()->detach(intval($request->lecturer));
    }
}
