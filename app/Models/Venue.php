<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;


    protected $fillable = ['school_id', 'department_id', 'name', 'capacity','type','status', 'has_multimedia'];

    public function getschoolschool (){
        return $this->belongsTo('App\Models\School', 'school_id');
    }

    public function getdepartmentname (){
        return $this->belongsTo('App\Models\Department', 'department_id');
    }

    public function checkDelete(){
        if($this->getdepartmentname()->get()->Count()>0)
            return false;
        return true;
    }
}
