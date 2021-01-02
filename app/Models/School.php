<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class School extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
