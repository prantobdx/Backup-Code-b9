<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/',[BlogController::class,'index'])->name('homePage');
Route::get('/blog-info',[BlogController::class,'getBlogInfo'])->name('blog-info');

Route::post('/crete-blog',[BlogController::class,'createBlog'])->name('crete-blog');
Route::get('/delete-blog/{id}',[BlogController::class,'deleteBlog'])->name('delete-blog');
Route::get('/edit-blog/{id}',[BlogController::class,'editBlog'])->name('edit-blog');
Route::post('/update-blog',[BlogController::class,'updateBlog'])->name('update-blog');
