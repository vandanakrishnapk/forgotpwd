<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
Route::get('/showlogin',[HomeController::class,'showlogin'])->name('showlogin');
Route::post('/login',[HomeController::class,'login'])->name('login');
Route::get('/showregister',[HomeController::class,'showregister'])->name('showregister');
Route::post('/register',[HomeController::class,'register'])->name('register');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');

