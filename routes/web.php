<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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
    return view('dashboard', ['data'=>['title'=>'Dashboard', 'file'=>'index']]);
});





Route::get('login', function () {
    return view('login');
});


Route::get('logout', [UserController::class,'logout']);
Route::get('users', [UserController::class, 'index']);


Route::post('login', [LoginController::class,'login']);
