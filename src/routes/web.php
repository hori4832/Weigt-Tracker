<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserDataController;

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


Route::get('/', [AuthController::class, 'index']);
Route::get('/weight_logs/create', [AuthController::class, 'create']);
Route::post('/weight_logs/search', [AuthController::class, 'search']);
Route::get('/weight_logs/{:weightLogld}', [AuthController::class, '{:weightLogld}']);
Route::get('/holiday','CalendarController@getHoliday');
Route::post('/holiday','CalendarController@postHoliday');
Route::get('/post/register', [PostController::class, 'register'])->name('post.register');
Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
Route::get('users', [UserController::class, 'index']);

