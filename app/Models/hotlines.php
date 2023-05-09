<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotlines extends Model
{
    use HasFactory;
    public $table="hotlines";
    protected $primaryKey = 'person_id';
    public $timestamps=true;
}
