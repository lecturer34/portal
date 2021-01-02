<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentValidation;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\School;

class DepartmentController extends Controller
{
    private function validate_($request){

        $this->validate($request, [
           "name"=>"required",
           "description"=>"required"
        ]);

    }

    public function index(School $school)
    {
        $departments = Department::where('school_id', $school->id)->get();
        return view('school.departments', compact('departments', 'school'));
    }

    public function create()
    {
        return view('department.create');
    }

    public function store(Request $request)
    {
        $this->validate_($request);

        $school_id = session("school_id");
        Department::create([
            "name"=>$request->name,
            "description"=>$request->description,
            "school_id"=> $school_id
        ]);

        return redirect()->route('school.departments', $school_id);
    }

    public function edit(Department $department)
    {
        return view('department.edit', compact('department'));
    }

    public function show(Department $department)
    {
        return view('department.show', compact('department'));
    }

    public function update(Request $request, Department $department){
        $this->validate_($request);

        $department->name = $request->name;
        $department->description = $request->description;
        $department->save();
        return redirect()->route('school.departments', session('school_id'));
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route("school.departments", session('school_id'));
    }

}
