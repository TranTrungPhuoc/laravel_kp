<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

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

Route::get('/admin/category', [CategoryController::class, 'index']);
Route::get('/admin/category/add', [CategoryController::class, 'add']);
Route::get('/admin/category/edit', [CategoryController::class, 'edit']);
Route::get('/admin/category/del', [CategoryController::class, 'del']);


Route::get('/admin/post', [PostController::class, 'index']);
Route::get('/admin/post/add', [PostController::class, 'add']);
Route::get('/admin/post/edit', [PostController::class, 'edit']);
Route::get('/admin/post/del', [PostController::class, 'del']);

Route::get('/admin/user', [UserController::class, 'index']);
Route::get('/admin/user/add', [UserController::class, 'add']);
Route::get('/admin/user/edit', [UserController::class, 'edit']);
Route::get('/admin/user/del', [UserController::class, 'del']);

Route::get('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

Route::post('/processLogin', [UserController::class, 'processLogin']);

// session
Route::get('/createSession', [UserController::class, 'createSession']);
Route::get('/getSession', [UserController::class, 'getSession']);
Route::get('/deleteSession', [UserController::class, 'deleteSession']);