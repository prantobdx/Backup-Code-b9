<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SmsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
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

Route::get('/teacher-login',[TeacherController::class,'teacherLogin'])->name('teacher-login');

Route::post('/teacher-login',[TeacherController::class,'teacherLoginCheck'])->name('teacher-login');

//Route::get('/login',[SmsController::class,'contact'])->name('login');
//
//Route::get('/register',[SmsController::class,'contact'])->name('register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

    Route::get('/add-teacher',[TeacherController::class,'index'])->name('add-teacher');

    Route::post('/create-teacher',[TeacherController::class,'createTeacher'])->name('create-teacher');

    Route::get('/manage-teacher',[TeacherController::class,'manageTeacher'])->name('manage-teacher');

    Route::post('/delete-teacher',[TeacherController::class,'deleteTeacher'])->name('delete-teacher');

    Route::get('/edit-teacher/{id}',[TeacherController::class,'editTeacher'])->name('edit-teacher');

    Route::post('/update-teacher',[TeacherController::class,'updateTeacher'])->name('update-teacher');

});
