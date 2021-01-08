<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Department;

class CourseController extends Controller
{
    private function validate_($request){

        $this->validate($request, [
            "code"=>"required",
            "title"=>"required",
            "creditunit"=>"required|integer"
        ]);

    }

    public function index(Department $department)
    {
        $courses = Course::where('department_id', $department->id)->paginate(5);
        return view('department.courses', compact('courses', 'department'));
    }


    public function create()
    {
       return view('course.create');
    }


    public function store(Request $request)
    {
        $this->validate_($request);
        $department_id = session('department_id');
        $course = Course::create([
            "code"=>$request->code,
            "title"=>$request->title,
            "creditunit"=>$request->creditunit,
            "department_id"=>$department_id
        ]);
        return redirect()->route('department.courses', $department_id);
    }


    public function edit(Course $course)
    {
        return view('course.edit', compact('course'));
    }

    public function show(Course $course)
    {
        return view('course.show', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $this->validate_($request);
        $course->code = $request->code;
        $course->title = $request->title;
        $course->creditunit = $request->creditunit;
        $course->save();
        return redirect()->route("department.courses", session('department_id'));
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route("department.courses", session('department_id'));
    }
}
