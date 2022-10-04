<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
    return view('home');
});

Route::get('/login',[EmployeeController::class,'index'])->name('login');
Route::get('/register',[EmployeeController::class,'register'])->name('register');
Route::get('/welcome',[EmployeeController::class,'welcome'])->name('welcome');
Route::get('/home',[EmployeeController::class,'welcome'])->name('home');
Route::get('/pricing',[EmployeeController::class,'pricing'])->name('pricing');
