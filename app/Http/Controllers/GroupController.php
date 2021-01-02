<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use App\Models\Course;

class GroupController extends Controller
{
    private function validate_($request){

        $this->validate($request, [
            "size"=>"required|integer"
        ]);

    }

    public function index(Course $course)
    {
        $groups = Group::where('course_id', $course->id)->get();
        return view('course.groups', compact('groups', 'course'));
    }

    public function create()
    {

        $last_added =  Group::where('course_id', session('course_id'))
            ->orderBy('label', 'DESC')->get()->first();

        $label = 1;

        if ( $last_added != null  )
            $label = $last_added->label + 1;


        return view('group.create', compact('label'));
    }

    public function store(Request $request)
    {
        $this->validate_($request);
        $course_id = session('course_id');
        $group = Group::create([
            "size"=>$request->size,
            "label"=>$request->label,
            "course_id"=>$course_id
        ]);
        return redirect()->route('course.groups', $course_id);
    }


    public function show(Group $group)
    {
        return view('group.show', compact('group'));
    }

    public function edit(Group $group)
    {
        return view('group.edit', compact('group'));
    }


    public function update(Request $request, Group $group)
    {
        $this->validate_($request);
        $group->size = $request->size;
        $group->save();
        return redirect()->route("course.groups", session('course_id'));
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route("course.groups", session('course_id'));
    }
}
