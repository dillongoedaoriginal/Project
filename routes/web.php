<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\control;
use App\Http\Controllers\lectControl;
use App\Http\Controllers\examControl;
use App\Http\Controllers\timetableControl;
use App\Models\examModel;
use App\Models\time;
use App\Models\timetable;
use App\Models\hotlines;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/academics', function () {
    return view('academics');
});

Route::get('/lecturer', function () {
    return view('lecturertInfo');
});
Route::get('/hotline', function () {
    return view('hotline');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/hotline', [lectControl::class,'hotlineShow']);
Route::get('/lecturer', [lectControl::class,'lectShow']);
Route::get('/profile', [control::class,'show']);
Route::get('/examS', [examControl::class,'showExam']);
Route::get('/timetable', [timetableControl::class,'showTable']);