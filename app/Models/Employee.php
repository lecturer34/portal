<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['department_id', 'rank_id','employee_no','firstname','lastname', 'email'];

    public function getdepartmentname (){
        return $this->belongsTo('App\Models\Department', 'department_id');
    }

    public function getrankname (){
        return $this->belongsTo('App\Models\Rank', 'rank_id');
    }

    public function checkDelete(){
        if($this->getrankname()->get()->Count()>0)
            return false;
        return true;
    }
}
