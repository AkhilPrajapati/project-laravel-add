<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberModelController;// import gareko

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


Route::get('/add', function(){return view('add');});



// Route::view('/add', 'add');//add is view name
Route::post('/add', [MemberModelController::class,'addData']);//yrha data post garxa
