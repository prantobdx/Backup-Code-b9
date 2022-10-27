<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SmsController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[SmsController::class,'index'])->name('home');

Route::get('/about',[SmsController::class,'about'])->name('about');

Route::get('/course',[SmsController::class,'course'])->name('course');

Route::get('/contact',[SmsController::class,'contact'])->name('contact');

Route::get('/login',[SmsController::class,'contact'])->name('login');

Route::get('/register',[SmsController::class,'contact'])->name('register');
