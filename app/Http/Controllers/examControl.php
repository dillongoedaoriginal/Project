<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\examModel;
use App\Models\User;

class examControl extends Controller
{
    public function showExam(){
       
        $user=User::find(Auth::user()->id);
        $user2=Auth::user();
        $user3=User::where('id',Auth::user()->id)->first();
      
        return view ('examSchedule',compact('user','user2','user3'));
    }
}
