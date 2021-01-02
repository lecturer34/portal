<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Department;

class CourseController extends Controller
{

    public function index(Department $department)
    {
        $courses = Course::where('department_id', $department->id)->get();
        return view('department.courses', compact('courses', 'department'));
    }


    public function create()
    {
       return view('course.create');
    }


    public function store(Request $request)
    {
        $department_id = session('department_id');
        $course = Course::create([
            "code"=>$request->code,
            "title"=>$request->title,
            "creditunit"=>$request->creditunit,
            "department_id"=>$department_id
        ]);
        return redirect()->route('department.courses', $department_id);
    }


    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('course.edit', compact('course'));
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('course.show', compact('course'));
    }

    public function update(Request $request){
        return true;
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return redirect()->route("department.courses", session('department_id'));
    }
}
