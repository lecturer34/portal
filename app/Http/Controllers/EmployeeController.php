<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Rank;
use Illuminate\Http\Request;
use Image;

class EmployeeController extends Controller
{
    private function validate_($request){

        $this->validate($request, [
            "department_id"=>"required",
            "rank_id"=>"required",
            "employee_no"=>"required",
            "firstname"=>"required",
            "lastname"=>"required",
            "email"=>"required"
        ]);

    }

    public function index()
    {
        $employees = Employee::all();
        $ranks = Rank::all();
        $departments = Department::all();
        return view('employee.list', compact('employees','departments','ranks'));
    }

    public function create()
    {
        $departments = Department::all();
        $ranks = Rank::all();
        return view('employee.create', compact('departments','ranks'));
    }

    public function store(Request $request)
    {
        $this->validate_($request);

        $employeerecord = Employee::create([
            "department_id"=>$request->department_id,
            "rank_id"=>$request->rank_id,
            "employee_no"=>$request->employee_no,
            "firstname"=>$request->firstname,
            "lastname"=>$request->lastname,
            "email"=>$request->email
        ]);

       /* if ($employeerecord != null) {
            $file = request()->file('photourl');
            $fileName = $employeerecord->id .'.'. $file->getClientOriginalExtension();
            return $fileName;
            $file->move(public_path('employeepix'), $fileName);
            return $n;
            if (file_exists(public_path() . '/employeepix/' . $fileName)) {
                $url = 'employeepix/' . $fileName;
                $img = Image::make(public_path() . '/employeepix/' . $fileName);
                // now you are able to resize the instance
                $img->resize(180, 213);
                $img->save(public_path() . '/employeepix/' . $fileName);
                $employeerecord->photourl = $fileName;
            }
            $employeerecord->save();
            session()->flash('success', 'Employee was added successfully!');
            $departments = Department::all();
            $ranks = Rank::all();
            return redirect()->route('employee.list')->with(compact('departments','ranks'));

        } else {
            session()->flash('error', 'Failed to add employee!!');
        }*/

        $departments = Department::all();
        $ranks = Rank::all();
        return redirect()->route('employee.list')->with(compact('departments','ranks'));

    }

    public function edit(Employee $employee)
    {
        $ranks = Rank::all();
        $departments = Department::all();
        return view('employee.edit', compact('employee','ranks', 'departments'));
    }

    public function update(Request $request, Employee $employee){
        $this->validate_($request);

        $employee->department_id = $request->department_id;
        $employee->rank_id = $request->rank_id;
        $employee->employee_no = $request->employee_no;
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->email = $request->email;
        $employee->save();
        $ranks = Rank::all();
        $departments = Department::all();
        return redirect()->route('employee.list')->with(compact('ranks', 'departments'));
    }

    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }

    public function destroy(Employee $employee)
    {
       // if ($employee->checkDelete()) {
           // $employee->delete();
        if ($employee->delete()) {
            session()->flash('success', 'Employee was deleted successfully!');
        } else {
            session()->flash('error', 'Employee cannot be deleted');
        }
        $ranks = Rank::all();
        $departments = Department::all();
        return redirect()->route('employee.list')->with(compact('ranks', 'departments'));

    }

}
