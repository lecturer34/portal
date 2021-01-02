<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentValidation;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\School;

class DepartmentController extends Controller
{
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
        $school_id = session("school_id");
        Department::create([
            "name"=>$request->name,
            "description"=>$request->description,
            "school_id"=> $school_id
        ]);
        return redirect()->route("school.departments", $school_id);
    }

    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('department.edit', compact('department'));
    }

    public function show($id)
    {
        $department = Department::findOrFail($id);
        return view('department.show', compact('department'));
    }

    public function update(Request $request){
        return true;
    }

    public function destroy($id)
    {
        Department::destroy($id);
        return redirect()->route("school.departments", session('school_id'));
    }

}
