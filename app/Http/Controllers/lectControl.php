<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lect; 
use App\Models\hotlines; 

class lectControl extends Controller
{
    public function lectShow(){
        // $data=timetable::where('id','=','1')->firstOrFail();
         //$profile = Profile::where('user_id', $user_id)->first();
         $info=lect::all();
         return view ('lecturertInfo', ['dis' => $info]);
     }
     public function hotlineShow(){
        // $data=timetable::where('id','=','1')->firstOrFail();
         //$profile = Profile::where('user_id', $user_id)->first();
         $inf=hotlines::all();
         return view ('hotline', ['Hlist' => $inf]);
     }
}
