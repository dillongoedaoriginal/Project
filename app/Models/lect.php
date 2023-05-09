<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class lect extends Model
{
    use HasFactory;
    public $table="lects";
    protected $primaryKey = 'lect_id';
    public $timestamps=true;
}
