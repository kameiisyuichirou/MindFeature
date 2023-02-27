<?php

use Illuminate\Support\Facades\Route;
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

Route::middleware('guest')->group(function() {
Route::get('/', function () {
    return view('index');
});

Route::get('/index',[UserController::class,'index'])->name('index');

Route::get('/contact',
[UserController::class,'contact'])
->name('contact');

Route::post('/confirm',[UserController::class,'confirm'])->name('confirm');

Route::post('/send',[UserController::class,'send'])->name('send');

Route::get('/register',[UserController::class,'register'])->name('register');

Route::post('/register_complete',[UserController::class,'register_complete'])->name('register_complete');

Route::get('/login',[UserController::class,'login'])->name('login');

Route::post('/sign_in',[UserController::class,'sign_in'])->name('sign_in');

Route::get('/reset',[UserController::class,'reset'])->name('reset');

Route::post('/reset_register',[UserController::class,'reset_register'])->name('reset_register');

});

Route::middleware('auth')->group(function() {
    Route::get('/general',[UserController::class,'general'])->name('general');

    

    Route::post('/general_course',[UserController::class,'general_course'])->name('general_course');

    Route::post('/logout',[UserController::class,'logout'])->name('logout');
});

Route::middleware(['AdminMiddleware'])->group(function(){
    Route::get('/admin',[UserController::class,'admin'])->name('admin');

    Route::post('/admin_create',[UserController::class,'admin_create'])->name('admin_create');
});




