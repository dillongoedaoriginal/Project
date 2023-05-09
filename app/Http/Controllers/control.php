<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\timetable;
use App\Models\User;


class control extends Controller
{
    public function show(){
        $user=User::find(Auth::user()->id);
        $user2=Auth::user();
        $user3=User::where('id',Auth::user()->id)->first();
       
      
        
        return view ('profile',compact('user','user2','user3'));
    }
   
    

}
