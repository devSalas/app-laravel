<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;
use Illuminate\Support\Facades\Route;

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
    return view('app');
});
Route::get('/signup',[signupController::class,'index'])->name('signup');
Route::post('/signup',[signupController::class,'show'])->name('signup');


Route::get('/login',[loginController::class,'index'])->name('login');
Route::post('/login',[loginController::class,'validacion'])->name('login');
