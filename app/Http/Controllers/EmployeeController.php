<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\School;
use App\Models\Venue;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private function validate_($request){

        $this->validate($request, [
            "department_id"=>"required",
            "employee_no"=>"required",
            "firstname"=>"required",
            "lastname"=>"required",
            "email"=>"required"
        ]);

    }

    public function index()
    {
        $employees = Employee::all();
        return view('employee.list', compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('employee.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $this->validate_($request);

        Employee::create([
            "department_id"=>$request->department_id,
            "employee_no"=>$request->employee_no,
            "firstname"=>$request->firstname,
            "lastname"=>$request->lastname,
            "email"=>$request->email

        ]);
        $departments = Department::all();
        return redirect()->route('employee.list')->with(compact('departments'));
    }
}
