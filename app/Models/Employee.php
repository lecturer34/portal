<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['department_id', 'employee_no','firstname','lastname', 'email'];

    public function getdepartmentname (){
        return $this->belongsTo('App\Models\Department', 'department_id');
    }
}
