<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('welcome'); });

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

Route::post('/processLogin', [UserController::class, 'processLogin']);

// session
Route::get('/createSession', [UserController::class, 'createSession']);
Route::get('/getSession', [UserController::class, 'getSession']);
Route::get('/deleteSession', [UserController::class, 'deleteSession']);