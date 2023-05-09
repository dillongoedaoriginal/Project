<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examModel extends Model
{
    use HasFactory;
    public $table="examS";
    protected $primaryKey = 'stud_id';
    public $timestamps=true;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
