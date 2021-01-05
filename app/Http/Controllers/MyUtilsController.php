<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyUtilsController extends Controller
{
    public function getSchools(){
        return School::all();
    }

    public function getDepartments($schoolId){
        return Department::where('school_id', $schoolId)->get();
    }

    public function getLecturers($departmentId){
        return Lecturer::where('department_id', $departmentId)->get();
    }
}
