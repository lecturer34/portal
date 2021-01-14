<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['day', 'stime', 'etime', 'venue_id', 'group_id'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
