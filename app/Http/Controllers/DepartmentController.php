<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentValidation;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('departments.list', compact('departments'));
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(DepartmentValidation $request)
    {
        $validated = $request->validated();
        $name = $request->name; $code = $request->code;
        $department = new Department();
        $department->name = $name;
        $department->code = $code;
        $department->save();
        session()->flash('success', 'Department  was added successfully!');
        return redirect()->route("department.list");
    }

    public function edit($id)
    {
        $department = Department::find($id);
        return view('departments.edit', compact('department'));
    }

    public function update(DepartmentValidation $request){
        $validated = $request->validated();
        $department = Department::find($request->id);
        $department->name = $request->name;
        $department->code = $request->code;
        $department->save();
        session()->flash('success', 'Department has been updated successfully!');
        return redirect()->route("department.list");
    }

    public function delete($id)
    {
        $department = Department::find($id);
        return view('departments.delete', compact('department'));
    }

    public function destroy(Request $request){
        department::destroy($request->id);
        return redirect()->route("department.list");
    }

}
