<?php

use App\Models\School;
use App\Models\Department;
use App\Models\Lecturer;

    function getSchools(){
        return School::all();
    }

    function getDepartments($schoolId){
        return Department::where('school_id', $schoolId)->get();
    }

    function getLecturers($departmentId){
        return Lecturer::where('department_id', $departmentId)->get();
    }