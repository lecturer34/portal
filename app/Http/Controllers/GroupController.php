<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use App\Models\Course;

class GroupController extends Controller
{

    public function index(Course $course)
    {
        $groups = Group::where('course_id', $course->id)->get();
        return view('course.groups', compact('groups', 'course'));
    }

    public function create()
    {

        return view('group.create');
    }

    public function store(Request $request)
    {
        $course_id = session('course_id');
        $group = Group::create([
            "size"=>$request->size,
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
