<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timetable extends Model
{
    use HasFactory;
    public $table="profile";
    protected $primaryKey = 'student_id';
    public $timestamps=true;
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    
}
