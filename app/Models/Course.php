<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\TextUI\XmlConfiguration\Groups;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'title', 'creditunit', 'department_id'];

    public function groups(){
        return $this->hasMany(Group::class);
    }

    public function department()
    {
        return  $this->belongsTo(Department::class);
    }
}
