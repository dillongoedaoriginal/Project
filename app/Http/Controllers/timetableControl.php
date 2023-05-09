<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\time;
use App\Models\User;

class timetableControl extends Controller
{
    public function showTable(){
       
        $user=User::find(Auth::user()->id);
        $user2=Auth::user();
        $user3=User::where('id',Auth::user()->id)->first();

        return view ('timetable',compact('user','user2','user3'));
    }
}
