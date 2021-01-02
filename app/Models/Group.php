<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['size', 'course_id'];
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
