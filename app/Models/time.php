<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class time extends Model
{
    use HasFactory;
    public $table="timetable";
    public $timestamps=true;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
